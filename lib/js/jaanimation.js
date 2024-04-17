var jaAnim = new Class({
	initialize: function(item, options){
		this.options = $extend({
			direction: 'v', //h: horizontal, v: verical
			movetype: 'straight', //straight | sine | random | preset
			loop: 1, // 1: normal loop 2: circle loop 0: noloop
			duration: 20000,
			org_pos: {x:200,y:200},
			begin_pos: {x:200,y:500},
			end_pos: {x:200,y:0},
			pre_pos: {x:[100,200,300],y:[0,0,0]},
			step: 4,
			radius: 20,
			index: 1,
			desc: false, //whether show desc on mouse over
			changebg: false,
			bgurl: 'bird.png',
			framesize: 180,
			frameitem: 24,
			frameorder: 'v',
			changespeed: 1000,
			delay: 5000,
			screen: false,
			offsets: {x:120,y:20},
			fps: 50
		},options || {});
		
		var p_width = $(item).getParent().getParent().getParent().getCoordinates().width;
		var p_height = $(item).getParent().getParent().getParent().getCoordinates().height;
		if(this.options.direction == 'h'){
			p_width -=$(item).getCoordinates().width;
			if(this.options.end_pos.x == 'auto' && this.options.begin_pos.x != 'auto'){				
				this.options.end_pos.x = p_width;				
			}
			if(this.options.begin_pos.x == 'auto' && this.options.end_pos.x != 'auto'){
				this.options.begin_pos.x = p_width;
			}			
		}else{
			p_height -=$(item).getCoordinates().height;
			if(this.options.end_pos.y == 'auto'){
				this.options.end_pos.y = p_height;
			}
			if(this.options.begin_pos.y == 'auto'){
				this.options.begin_pos.y = p_height;
			}
		}	
		if(this.options.begin_pos.x == 'auto' && this.options.end_pos.x == 'auto'){
				this.options.begin_pos.x = 0;
				this.options.end_pos.x = p_width;
		}
		if(this.options.begin_pos.y == 'auto' && this.options.end_pos.y == 'auto'){
				this.options.begin_pos.y = 0;
				this.options.end_pos.y = p_height;
		}
		tZindex = parseInt(this.options.index) + 1;
		this.item = item;
		this.fx = null;
		this.ck = new Hash.Cookie(this.item);
		
		window.addEvent('load',function(){
			if(this.ck.get('hide')){
				$(this.item).setStyle('display','none');
				return;
			}
			$(item).setStyle('display','block');
			this.start();
			if(this.options.desc){			
				this.tips = new JATips ($(item),{
					'className':'ja-anim', 
					'fixed':true, 
					offsets:{'x':this.options.offsets.x, 'y': this.options.offsets.y},
					onShow: function(){
						this.toolTip.setStyle('display','block');
					},
					onHide: function(){
						this.toolTip.setStyle('display','none');
					}
				});			
				$(this.item).addEvent('mouseenter',function(e){
					if(this.click||this.showtip){e.stop();return;}
					this.fx.stop();
					if(this.options.changebg){
						this.stoploop(this.t);
					}
					$clear(this.t2);
					$clear(this.delay);
				}.bind(this)).addEvent('mouseleave',function(e){
					if(this.showtip){e.stop();return;}	
					this.delay = this.mouselv.delay(1000,this,e);
				}.bind(this)).addEvent('click',function(e){
					if(!this.click || this.click == undefined){
						this.click = 1;
						if(this.options.changebg){
						this.stoploop(this.t);
						this.loopbg();
					}
					}else{
						this.click = 0;
					}
				}.bind(this)).addEvent('dblclick',function(e){				
					this.fx.stop();
					if(this.options.changebg){
						this.stoploop(this.t);
					}
					$clear(this.t2);
					this.dblclick = 1;
					this.fx2 = new Fx.Styles(this.item,{
						duration: 1000,
						wait: false
					});
					this.fx2.start({
						'opacity':0
					});				
					this.ck.set('hide',1);
				}.bind(this));	
				$(item+'-tip').addEvent('mouseenter',function(){
					this.showtip = 1;
					$clear(this.delay);
				}.bind(this)).addEvent('mouseleave',function(e){
					this.showtip = 0;
					this.mouselv(e);
				}.bind(this));		
			}
			if(this.options.changebg){
				$(this.item).getElement('.changebg').setStyle('background','url('+ this.options.bgurl +') no-repeat scroll 0 0 transparent');
				this.loopbg();
			}
		}.bind(this));		
		// Pause all animations when the current window is inactive
		window.addEvent('focus',function(){
			if(this.blur){		
				this.options.org_pos.x = $(this.item).getStyle('left');
				this.options.org_pos.y = $(this.item).getStyle('top');	
				$clear(this.t2);
				if(this.fx)
				{
					this.fx.stop();
				}					
				this.start();
				if(this.options.changebg){
					this.stoploop(this.t);
					this.loopbg();
				}
			}
			this.blur = 0;
		}.bind(this)).addEvent('blur',function(){
			this.blur = 1;
			if(this.fx)
			{
				this.fx.stop();
			}
			if(this.options.changebg){
				this.stoploop(this.t);
			}
			$clear(this.t2);
		}.bind(this));
	},
	hidetip: function(){
			$$('.ja-anim-tip').setStyle('opacity','0');	
	},
	mouselv: function(e){
			if(this.click || this.dblclick){e.stop();return;}		
				this.options.org_pos.x = $(this.item).getStyle('left');
				this.options.org_pos.y = $(this.item).getStyle('top');	
				$clear(this.t2);
				this.fx.stop();			
				this.start();
				if(this.options.changebg){
					this.stoploop(this.t);
					this.loopbg();
				}
	},
	start: function(){				
			//Set item to original position
			$(this.item).setStyles({'top':this.options.org_pos.y,'left':this.options.org_pos.x,'z-index': this.options.index});
			if(this.options.screen){
				$(this.item).setStyle('position','fixed');
			}
			//Begin moving
			switch(this.options.movetype){
				case 'straight':
					this.movestraight();
					break;
				case 'sine':
					this.time = 0;
					this.movesine();
					break;
				case 'preset':
					this.movepreset();
					this.t2 = this.movepreset.periodical(this.options.delay,this);
					break;
				default:
					this.moverandom();
					break;
			}		
		},
	movestraight: function(){
			//Get finish position
			if(this.x==undefined){
				this.x = this.options.end_pos.x;		
			}
			if(this.y==undefined){
				this.y = this.options.end_pos.y;
			}
			if(this.options.loop == 2){
				this.itemvalues = $(this.item).getCoordinates();
				var itemwidth = parseInt(this.itemvalues.width);
				var itemheight = parseInt(this.itemvalues.height);
				if(this.options.direction == 'h'){
					if(this.options.begin_pos.x < this.options.end_pos.x){
						this.x = parseInt(parseInt(this.options.end_pos.x) + itemwidth);
					}else{
						this.x = parseInt(parseInt(this.options.end_pos.x) - itemwidth);
					}
				}else{
					if(this.options.begin_pos.y < this.options.end_pos.y){
						this.y = this.options.end_pos.y + itemwidth;
					}else{
						this.y = this.options.end_pos.y - itemwidth;
					}
				}
			}
			var dur = this.getDuration({x:this.x,y:this.y});
			this.fx = new Fx.Styles(this.item,{
					fps: this.options.fps,
					duration: dur, 
					wait: false,
					transition: Fx.Transitions.linear,
					onComplete: function(){									
						if(this.options.loop == 1){
							if(this.x == this.options.end_pos.x){
								this.x = this.options.begin_pos.x;
							}else{
								this.x = this.options.end_pos.x;
							}				
							if(this.y == this.options.end_pos.y){
								this.y = this.options.begin_pos.y;
							}else{
								this.y = this.options.end_pos.y;
							}		
							this.movestraight();					
						}
						if(this.options.loop == 2){
							if(this.options.direction == 'h'){
								if(this.options.begin_pos.x < this.options.end_pos.x){
									$(this.item).setStyle('left',this.options.begin_pos.x - itemwidth);
								}else{
									$(this.item).setStyle('left',this.options.begin_pos.x + itemwidth);
								}								
								this.movestraight();
							}else{
								if(this.options.begin_pos.x < this.options.end_pos.x){
									$(this.item).setStyle('top',this.options.begin_pos.y - itemheight);
								}else{
									$(this.item).setStyle('top',this.options.begin_pos.y + itemheight);
								}	
								$(this.item).setStyle('top',this.options.begin_pos.y - itemheight);
								this.movestraight.delay(this.options.delay,this);
							}
						}
					}.bind(this)
			});					
			this.fx.start({
				'top': this.y+'px',
				'left': this.x+'px'
			});		
		},
	movesine: function(){
			switch(this.options.direction){
				case 'v':
					this.steplength = (this.options.end_pos.y - this.options.begin_pos.y)/this.options.step;
					if(this.options.begin_pos.y != this.options.org_pos.y && this.beginstep == undefined){
						for(var i = 0; i < this.options.step; i++){
							if(this.options.org_pos.y > (i * this.steplength)){
								this.beginstep = i + 1;
							}
						}					
					}
					break;
				case 'h':
					this.steplength = (this.options.end_pos.x - this.options.begin_pos.x)/this.options.step;
					if(this.options.begin_pos.x != this.options.org_pos.x && this.beginstep == undefined){
						for(var i = 0; i < this.step; i++){
							if(this.options.org_pos.x > (i * this.steplength)){
								this.beginstep = i + 1;
							}
						}
					}
					break;
			}
			if(this.beginstep == undefined)this.beginstep = 0;		
			this.stepduration = this.options.duration / this.options.step;
			if(this.options.direction == 'v'){
				this.cur = parseInt($(this.item).getStyle('top').replace('px',''));
			}else{
				this.cur = parseInt($(this.item).getStyle('left').replace('px',''))
			}
			if(this.time % 2 == 0){
				this.next = this.cur + this.steplength;
			}else{
				this.next = this.cur - this.steplength;
			}			
			if(((this.time % 2 == 0 && this.beginstep == this.options.step - 1)||(this.time % 2 == 1 && this.beginstep == 0)) && this.options.loop){
				this.time++;
			}
			if(this.beginstep % 2 == 0){
				this.radius = this.options.radius;
			}else{
				this.radius = -this.options.radius;
			}			
			if(this.beginstep < this.options.step - 1 && this.time % 2 ==0){
				this.beginstep++;
			}
			if(this.beginstep > 0 && this.time & 2 != 0){
				this.beginstep--;
			}	
			switch(this.options.direction){
				case 'v':	
					var dur = this.getDuration({x:(this.options.org_pos.x + this.radius),y:this.next});					
					break;
				case 'h':
					var dur = this.getDuration({x:this.next,y:(this.options.org_pos.y + this.radius)});					
					break;
			}	
			this.fx = new Fx.Styles(this.item,{
					fps: this.options.fps,
					duration: dur, 
					wait: false,
					transition: Fx.Transitions.linear,
					onComplete: function(){						
						this.movesine();			
					}.bind(this)
				});
			switch(this.options.direction){
				case 'v':				
					this.fx.start({
						'top': this.next,
						'left': this.options.org_pos.x + this.radius					
					});
					break;
				case 'h':
					this.fx.start({
						'left': this.next,
						'top': this.options.org_pos.y + this.radius					
					});
					break;
			}
		
		},
	moverandom: function(){
			this.v_length = this.options.end_pos.y - this.options.begin_pos.y;
			if(this.v_length < 0)this.v_length = - this.v_length;
			this.h_length = parseInt(this.options.end_pos.x - this.options.begin_pos.x);
			if(this.h_length < 0)this.h_length = - this.h_length;			
			this.x = Math.floor(Math.random() * this.h_length);
			this.y = Math.floor(Math.random() * this.v_length);
			this.x = this.options.begin_pos.x + this.x; 
			this.y = this.options.begin_pos.y + this.y;	
			var dur = this.getDuration({x:this.x,y:this.y});				
			this.fx = new Fx.Styles(this.item,{
					fps: this.options.fps,
					duration: dur, 
					wait: false,
					transition: Fx.Transitions.linear,
					onComplete: function(){						
						this.moverandom();			
					}.bind(this)
				});
			this.fx.start({
				'left': this.x,
				'top': this.y
			});
		},
	movepreset: function(){
			this.numpos = this.options.pre_pos.x.length;
			if(this.curpos == undefined){
				this.curpos = 0;
			}else{
				this.tmppos = this.curpos;
				while(this.tmppos == this.curpos){
					this.tmppos = Math.floor(Math.random() * this.numpos);
				}				
				this.curpos = this.tmppos;
				//destroy
				this.tmppos = null;
			}	
			var dur = this.getDuration({x:this.options.pre_pos.x[this.curpos],y:this.options.pre_pos.y[this.curpos]});		
			this.fx = new Fx.Styles(this.item,{
					fps: this.options.fps,
					duration: dur, 
					wait: false,
					transition: Fx.Transitions.Sine					
				});			
			this.fx.start({
				'left': this.options.pre_pos.x[this.curpos],
				'top': this.options.pre_pos.y[this.curpos]
			});
		},
	loopbg: function(){
			this.frame = 0;
			this.changebg();
			this.t = null;
			this.t = this.changebg.periodical(this.options.changespeed/this.options.frameitem, this);			
	},
	changebg: function(){
		this.frP = - this.frame * this.options.framesize;
		if(this.options.frameorder == 'v'){			
			$(this.item).getElement('.changebg').setStyle('background-position','0 ' + this.frP + 'px');
		}else{
			$(this.item).getElement('.changebg').setStyle('background-position',this.frP + 'px 0');
		}
		if(this.frame == this.options.frameitem - 1)this.frame = 0;
		else this.frame++;
		//destroy
		this.frP = null;			
	},
	stoploop: function(t){
			$clear(t);
			$(this.item).getElement('.changebg').setStyle('background-position','0 0');
	},
	getPathLength: function(a,b){
		var h = a.x - b.x;
		h = h > 0 ? h : -h;
		var v = a.y - b.y;
		v = v > 0 ? v : -v;
		return Math.sqrt(Math.pow(h,2)+ Math.pow(v,2));
	},
	getDuration: function(to){
		var curpos = {};
		curpos.x = parseInt($(this.item).getStyle('left'));
		curpos.y = parseInt($(this.item).getStyle('top'));
		var path = this.getPathLength({x:curpos.x,y:curpos.y},to);		
		return Math.round(path * 1000 / this.options.duration);
	}
});
//Overwrite Tips class

var JATips = new Class({

	options: {
		onShow: function(tip){
			tip.setStyle('visibility', 'visible');
		},
		onHide: function(tip){
			tip.setStyle('visibility', 'hidden');
		},
		maxTitleChars: 30,
		showDelay: 100,
		hideDelay: 100,
		className: 'tool',
		offsets: {'x': 16, 'y': 16},
		fixed: false
	},

	initialize: function(elements, options){
		this.setOptions(options);
		this.options.timeout = 0; //no timeout
		this.toolTip = new Element('div', {
			'class': this.options.className + '-tip',
			'styles': {				
				//'position': window.ie6?'absolute':'fixed',
				'position': $(elements).getStyle('position'),
				'display': 'none'			
			},
			'id': $(elements).getProperty('id')+'-tip'
		}).inject(document.body);
		//Updated by thuanlq
		this.wrapper = new Element('div',{'class':this.options.className+'-inner'}).inject(this.toolTip);
		//End
		$$(elements).each(this.build, this);
		if (this.options.initialize) this.options.initialize.call(this);
		this.toolTip.addEvent ('mouseenter', function(event) { 
			this.start(this.curTip); event.stop();
			this.curTip.fireEvent ('mouseenter', event);
		}.bind(this));
		this.toolTip.addEvent ('mouseleave', function (event) {
			this.end(event);
			this.curTip.fireEvent ('mouseleave', event);
		}.bind (this));
	},

	build: function(el){
		var myTitle = (el.href && el.getTag() == 'a') ? el.href.replace('http://', '') : (el.rel || false);
		var myText;
		if (el.title){
			var dual = el.title.split('::');
			if (dual.length > 1){
				myTitle = dual[0].trim();
				myText = dual[1].trim();
			} else {
				myText = el.title;
			}
			el.removeAttribute('title');
		} else {
			myText = '';
		}
		if (myTitle && myTitle.length > this.options.maxTitleChars) myTitle = myTitle.substr(0, this.options.maxTitleChars - 1) + "&hellip;";
		else{myTitle='';}
		el.setProperties({'myTitle': myTitle, 'myText': myText});
		
		el.addEvent('mouseenter', function(event){
			this.start(el);
			if (!this.options.fixed) this.locate(event);
			else this.position(el);
		}.bind(this));
		if (!this.options.fixed) el.addEvent('mousemove', this.locate.bindWithEvent(this));
		var end = this.end.bind(this);
		el.addEvent('mouseleave', end);
		el.addEvent('trash', end);
	},

	start: function(el){
		if (!el) el = this.curTip;
		//Add status to disable tips
		if (el.tip && el.tip == 'disabled') return;
		var myText = el.getProperty('myText');
		var myTitle = el.getProperty('myTitle');
		if (myText == '') return; //blank tip
		this.curTip = el;
		//Original code
		this.wrapper.empty();
		if (myTitle){
			this.title = new Element('span').inject(new Element('div', {'class': this.options.className + '-title'}).inject(this.wrapper)).setHTML(myTitle);
		}
		if (myText){
			this.text = new Element('span').inject(new Element('div', {'class': this.options.className + '-text'}).inject(this.wrapper)).setHTML(myText);
		}
		$clear(this.timer);
		this.timer = this.show.delay(this.options.showDelay, this);
	},

	end: function(event){
		$clear(this.timer);
		this.timer = this.hide.delay(this.options.hideDelay, this);
	},

	position: function(element){
		var pos = element.getPosition();
		this.toolTip.setStyles({
			'left': pos.x + this.options.offsets.x,
			'top': pos.y + this.options.offsets.y
		});
	},

	locate: function(event){
		var win = {'x': window.getWidth(), 'y': window.getHeight()};
		var scroll = {'x': window.getScrollLeft(), 'y': window.getScrollTop()};
		var tip = {'x': this.toolTip.offsetWidth, 'y': this.toolTip.offsetHeight};
		var prop = {'x': 'left', 'y': 'top'};
		for (var z in prop){
			var pos = event.page[z] + this.options.offsets[z];
			if ((pos + tip[z] - scroll[z]) > win[z]) pos = event.page[z] - this.options.offsets[z] - tip[z];
			this.toolTip.setStyle(prop[z], pos);
		};
	},

	show: function(){
		if (this.options.timeout) this.timer = this.hide.delay(this.options.timeout, this);
		this.fireEvent('onShow', [this.toolTip]);
	},

	hide: function(){
		this.fireEvent('onHide', [this.toolTip]);
	},
	
	enableTip: function(el){
		if (el) el.tip = 'enabled';
	},
	
	disableTip: function(el){
		if (el) el.tip = 'disabled';
		if (this.curTip && this.curTip == el) this.hide();
	}

});

JATips.implement(new Events, new Options);

