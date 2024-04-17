(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {}; 

// library properties:
lib.properties = {
	width: 300,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	webfonts: {},
	manifest: [
		{src:"images/nen.jpg", id:"nen"}
	]
};



lib.webfontAvailable = function(family) { 
	lib.properties.webfonts[family] = true;
	var txtFilters = lib.webFontTxtFilters && lib.webFontTxtFilters[family] || [];
	for(var f = 0; f < txtFilters.length; ++f) {
		txtFilters[f].updateCache();
	}
};
// symbols:



(lib.nen = function() {
	this.initialize(img.nen);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,600);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgdIAAgRIAHAAIAAARg");
	this.shape.setTransform(259.4,53.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#373535").s().p("AgDA8IAAgQIAHAAIAAAQgAgYAbQgLgKAAgPQAAgNALgLQAKgLAOAAQAOAAALAKQALAMAAAMQAAAPgLALQgLAKgOAAQgNAAgLgKgAgSgQQgIAIAAAJQAAANAIAHQAIAIAKAAQALABAIgJQAIgIAAgMQAAgJgIgIQgHgJgMAAQgKAAgIAJgAALgrIgLgJIgJAJIgMAAIASgQIAHAAIASAQg");
	this.shape_1.setTransform(253.9,54.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#373535").s().p("AAbAvIg1hRIAABRIgKAAIAAhdIANAAIAyBNIAAhNIAKAAIAABdg");
	this.shape_2.setTransform(245.1,53.6);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgOALgKQALgKANAAQASAAAJANIAAgMIAJAAIAABEIgJAAIAAgNQgJAOgSAAQgNAAgLgKgAgSgFQgIAGAAANQAAANAIAHQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgMgIgGQgHgJgNABQgKAAgIAHgAgMgqIAEgHIAXAOIgEAHg");
	this.shape_3.setTransform(232.4,53.4);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#373535").s().p("AAYAvIAAgsIguAAIAAAsIgKAAIAAhdIAKAAIAAAqIAuAAIAAgqIAJAAIAABdg");
	this.shape_4.setTransform(223.9,53.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#373535").s().p("AgJAMIAJgXIAKAAIgKAXg");
	this.shape_5.setTransform(213.8,57.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#373535").s().p("AAqAjIAAgmQAAgKgFgGQgEgHgKAAQgLAAgEAHQgEAGAAAKIAAAmIgHAAIAAgmQAAgKgEgGQgFgHgKAAQgKAAgEAHQgFAGAAAKIAAAmIgJAAIAAhEIAJAAIAAAIQAGgJANAAQAQAAAGANQAIgNAPAAQANAAAHAIQAIAJAAANIAAAng");
	this.shape_6.setTransform(206.6,54.8);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#373535").s().p("AgbAuQgKgLAAgPQAAgPAKgIQALgLAPAAQANAAALALQAKAJAAAPIAAACIg9AAQABAKAIAIQAHAHALAAQAHAAAGgEQAHgEADgIIAJAAQgEALgJAGQgJAHgKAAQgPAAgLgKgAgTAAQgHAEgCALIA0AAQgCgLgHgEQgHgHgJABQgLgBgHAHgAAIgYIgIgJIgMAJIgLAAIASgQIAHAAIASAQgAAJgpIAZgOIAEAHIgZAOg");
	this.shape_7.setTransform(196.8,52.8);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgdIAAgRIAHAAIAAARg");
	this.shape_8.setTransform(191.2,53.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#373535").s().p("AAUAvIgdgpIgMAPIAAAaIgKAAIAAhdIAKAAIAAA0IApg0IAMAAIgjAuIAjAvg");
	this.shape_9.setTransform(186.7,53.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#373535").s().p("AAVAjIAAgkIgBgKQgCgHgEgCQgGgGgIAAQgIAAgFAGQgEACgCAHQgBAEAAAFIAAAlIgJAAIAAhEIAJAAIAAAJQAHgKANAAQAOAAAIAJQAIAIAAAQIAAAkg");
	this.shape_10.setTransform(175.1,54.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgPALgJQAKgKAOAAQASAAAJANIAAgMIAJAAIAABEIgJAAIAAgNQgJAOgSAAQgNAAgLgKgAgSgFQgIAGAAANQAAANAIAHQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgMgIgGQgIgJgMABQgKAAgIAHgAgMgqIAEgHIAXAOIgEAHg");
	this.shape_11.setTransform(166.7,53.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQAKgLAOAAQAOAAALALQALALAAANQAAAPgLAKQgLALgOAAQgNAAgLgLgAgSgSQgIAIAAAKQAAAMAIAIQAIAIAKAAQALAAAIgJQAIgIAAgLQAAgKgIgIQgHgJgMAAQgKAAgIAJg");
	this.shape_12.setTransform(158.4,54.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#373535").s().p("AAYAvIAAgsIgvAAIAAAsIgJAAIAAhdIAJAAIAAAqIAvAAIAAgqIAJAAIAABdg");
	this.shape_13.setTransform(149.9,53.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#373535").s().p("AAVAjIAAgkIgCgKQgBgHgDgCQgHgGgIAAQgIAAgGAGQgDACgBAHQgCAEAAAFIAAAlIgJAAIAAhEIAJAAIAAAJQAHgKANAAQAPAAAHAJQAIAIAAAQIAAAkg");
	this.shape_14.setTransform(138.2,54.8);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#373535").s().p("AgDA8IAAgQIAHAAIAAAQgAgYAbQgLgKAAgQQAAgNALgLQALgKANAAQASAAAJAOIAAgNIAJAAIAABEIgJAAIAAgMQgJANgSAAQgNABgLgLgAgSgRQgIAIAAAKQAAANAIAHQAIAIAKAAQAMAAAIgIQAIgHAAgNQAAgJgIgIQgHgJgNAAQgKAAgIAIgAAMgrIgLgJIgJAJIgMAAIATgQIAGAAIASAQg");
	this.shape_15.setTransform(129.9,54.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#373535").s().p("AgXAZQgEgGgBgFIgBgMIAAgkIAJAAIAAAkQAAAMAEAGQAFAHALAAQAIAAAFgGQAFgDABgGQACgFAAgGIAAgjIAJAAIAABEIgJAAIAAgLIAAAAQgDAGgGADQgGADgGAAQgPAAgIgKg");
	this.shape_16.setTransform(121.8,54.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#373535").s().p("AAcAoQgMAIgQAAQgTAAgPgOQgPgOAAgUQAAgTAPgOQAOgOAUAAQAUAAAQAOQAOAPAAASQAAAVgQANQAHAGAHAAIAAAIQgMAAgIgIgAgiATIAFAHQAMANARABQALAAAKgHIgOgJQgKgIgRAAQgHABgHACgAAGAOIAKAGIAMAJQAGgHADgHQADgGAAgJQABgPgMgMQgMgMgRABQgQgBgMAMQgMAMAAAPQABAHABAEQAKgDAJAAQAOAAALAGg");
	this.shape_17.setTransform(112.5,53.6);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#373535").s().p("AgJAMIAJgXIAKAAIgKAXg");
	this.shape_18.setTransform(101.1,57.9);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#373535").s().p("AgSAqQgKgHgEgMIAKAAQAHASAQAAQAMAAAHgIQAHgHAAgLIAAgGIgBAAQgDAHgIADQgHAEgIAAQgNAAgLgKQgLgLAAgNQAAgPALgLQALgLANAAQARAAAJAOIABAAIAAgMIAIAAIAAA/IgBAHQgBAHgEAFQgJANgSAAQgKAAgKgHgAgSgfQgIAIAAAMQAAALAIAGQAIAJAKAAQAMAAAHgJQAIgHAAgKQAAgLgIgJQgIgJgLAAQgKAAgIAJg");
	this.shape_19.setTransform(95.5,56.1);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#373535").s().p("AAVAjIAAgkIgBgKQgCgGgEgDQgGgGgIAAQgHAAgHAGQgDADgCAGQgCAEABAFIAAAlIgJAAIAAhEIAJAAIAAAJIAAAAQAHgKANAAQAOAAAIAJQAIAJAAAPIAAAkg");
	this.shape_20.setTransform(87.6,54.8);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#373535").s().p("AgcAgQgDgEgCgHIgBgMIAAgkIAJAAIAAAkQAAAMAFAGQAFAHALAAQAHAAAGgGQAEgDACgGIABgLIAAgjIAJAAIAAACIAAAAQACgBABgEIgEAAIAAgLIALAAIAAAMQAAADgCACIgCADIgDACIgDACIAAA5IgJAAIAAgKQgDAGgGADQgGADgFAAQgPAAgJgKg");
	this.shape_21.setTransform(80.3,54.2);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#373535").s().p("AgNAjIAAhEIAJAAIAAALIABAAQACgGADgEQAEgBAIgBIAAAJQgSACAAAUIAAAmg");
	this.shape_22.setTransform(74.4,54.8);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#373535").s().p("AgDAvIAAhUIgWAAIAAgJIAzAAIAAAJIgWAAIAABUg");
	this.shape_23.setTransform(69.7,53.6);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#373535").s().p("AgZAoQgKgLAAgPQAAgPALgJQAKgKAOAAQASAAAJANIAAAAIAAgMIAJAAIAABEIgJAAIAAgNIAAAAQgJAOgSAAQgNAAgMgKgAgSgFQgIAGAAANQAAANAIAHQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgMgIgGQgIgJgMABQgLAAgHAHgAgNgqIAFgHIAXAOIgEAHg");
	this.shape_24.setTransform(59,53.4);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#373535").s().p("AgcguIAYAAQAGABAIADQAJAEADAIQACAEAAAGQAAAFgCAFIgIAIQAQAFAAARQAAAOgMAHQgGAEgFAAIgjACgAgTAmIAUAAIAJgDQAKgEAAgLQAAgLgLgFQgFgCgEAAIgCAAIgRAAgAgTgFIATAAIAHgDQAHgDABgJQAAgHgFgEQgCgDgGgCIgDgBIgSAAg");
	this.shape_25.setTransform(51.5,53.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgdIAAgRIAHAAIAAARg");
	this.shape_26.setTransform(42.8,53.6);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#373535").s().p("AgZAaQgKgLAAgPQAAgOAKgKQAMgLANAAQASAAAJAOIAAgMIAJAAIAABDIgJAAIAAgMQgJAOgSAAQgNAAgMgKgAgTgTQgIAJAAAKQAAAMAIAIQAJAIAKAAQAMAAAIgIQAIgJAAgLQAAgJgIgJQgIgJgMAAQgKAAgJAIg");
	this.shape_27.setTransform(37.1,54.8);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#373535").s().p("AAYAvIAAgsIgvAAIAAAsIgJAAIAAhdIAJAAIAAAqIAvAAIAAgqIAJAAIAABdg");
	this.shape_28.setTransform(28.5,53.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#373535").s().p("AgMAvIAUggQgEACgEAAQgNAAgJgJQgJgIAAgNQAAgOAKgJQAJgKAMAAQAOAAAJAKQAJAJAAAOQAAAGgEAHIgdAvgAgPgeQgGAGAAALQAAAKAGAFQAGAHAJAAQAKAAAGgIQAGgEAAgLQAAgKgGgGQgHgIgJAAQgJAAgGAIg");
	this.shape_29.setTransform(17.2,53.5);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#373535").s().p("AAOAvIAAgRIgtAAIAAgJIArhDIAMAAIAABDIAIAAIAAAJIgIAAIAAARgAgUAVIAiAAIAAg1IAAAAg");
	this.shape_30.setTransform(10.1,53.6);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#373535").s().p("AgJAMIAJgXIAKAAIgKAXg");
	this.shape_31.setTransform(146,42.7);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_32.setTransform(143.5,38.4);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#373535").s().p("AgDA8IAAgQIAHAAIAAAQgAgYAbQgLgLAAgPQAAgMALgLQAKgLAOAAQAOAAALAKQALAMAAAMQAAAPgLALQgKAKgPAAQgNAAgLgKgAgSgRQgIAJAAAJQAAAMAIAJQAIAHAKAAQAMABAHgJQAIgIAAgMQAAgKgIgIQgIgIgLAAQgLAAgHAIgAALgrIgLgKIgJAKIgMAAIATgQIAGAAIASAQg");
	this.shape_33.setTransform(138.1,39.5);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#373535").s().p("AAcAvIg2hRIAABRIgKAAIAAhdIANAAIAyBNIABAAIAAhNIAJAAIAABdg");
	this.shape_34.setTransform(129.2,38.4);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgOALgKQALgLANABQASgBAJAOIAAgMIAJAAIAABEIgJAAIAAgNQgJAOgSAAQgNAAgLgKgAgSgEQgIAGAAAMQAAAMAIAIQAIAIAKAAQAMAAAIgIQAIgJAAgLQAAgLgIgHQgIgJgMABQgKAAgIAIgAgMgqIAEgHIAXANIgEAIg");
	this.shape_35.setTransform(116.6,38.2);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#373535").s().p("AAYAvIAAgsIgvAAIAAAsIgJAAIAAhdIAJAAIAAAqIAvAAIAAgqIAJAAIAABdg");
	this.shape_36.setTransform(108.1,38.4);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#373535").s().p("AgjAvIAAhcIAJAAIAAANQAJgOARAAQAOAAALAKQALALAAAPQAAANgLALQgKAKgPAAQgRAAgJgOIAAAlgAgTgeQgIAIAAAMQAAAKAIAIQAIAIALAAQALAAAIgIQAIgHAAgLQAAgMgIgIQgIgIgLAAQgLAAgIAIg");
	this.shape_37.setTransform(96.1,40.8);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgOALgKQALgLANABQASgBAJAOIAAgMIAJAAIAABEIgJAAIAAgNQgJAOgSAAQgOAAgKgKgAgSgEQgIAFAAANQAAAMAIAIQAIAIAKAAQAMAAAIgIQAIgJAAgLQAAgLgIgHQgIgJgMABQgKAAgIAIgAgLgkIAXgNIAEAHIgXAOg");
	this.shape_38.setTransform(87.1,38.2);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#373535").s().p("AAVAvIAAgnQAAgGgCgCQgBgFgDgEQgHgFgIAAQgHAAgHAFQgDAEgCAFQgCACAAAFIAAAoIgIAAIAAhdIAIAAIAAAiIABAAQAHgKANAAQAOgBAIAKQAIAJAAAMIAAAng");
	this.shape_39.setTransform(79.1,38.4);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#373535").s().p("AgDAvIAAhUIgWAAIAAgJIAyAAIAAAJIgUAAIAABUg");
	this.shape_40.setTransform(72.5,38.4);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#373535").s().p("AgDAiIAAgQIAHAAIAAAQgAgDgRIAAgQIAHAAIAAAQg");
	this.shape_41.setTransform(64.6,39.6);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#373535").s().p("AAqAjIAAgmQAAgKgFgGQgEgHgKAAQgKAAgFAHQgEAGAAAKIAAAmIgHAAIAAgmQAAgLgFgFQgEgHgKAAQgKAAgFAHQgEAFAAALIAAAmIgIAAIAAhEIAIAAIAAAIQAGgJANAAQAQAAAGANQAIgNAPAAQAOAAAGAIQAIAJAAANIAAAng");
	this.shape_42.setTransform(56.9,39.6);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#373535").s().p("AgYA0QgLgLAAgPQAAgOALgMQAKgIAOAAQAOAAALAJQALALAAAPIgBACIg9AAQABALAIAHQAIAHAJAAQAHAAAHgEQAHgFADgHIAJAAQgDALgKAHQgJAGgLAAQgOAAgKgKgAgRAEQgHAHgCAKIA0AAQgBgKgIgHQgHgEgKAAQgJAAgIAEgAALgSIgLgKIgJAKIgMAAIASgQIAHAAIASAQgAALgfIAAgCQAAgDACgDIABgCIACgCIACgBIABgCIABgDQAAgBAAAAQAAgBAAAAQgBgBAAAAQAAgBgBAAQAAgBgBAAQAAAAAAAAQgBgBAAAAQgBAAAAAAQgDAAgCADIgBACIAAAEIgIAAIAAgDQAAgFAEgEQAFgDAFAAQAFAAAEADQAEAEAAAFIgCAGIgBABIgBABIgDADIgBACQgBABAAAEg");
	this.shape_43.setTransform(46.8,37);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_44.setTransform(41.4,38.4);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#373535").s().p("AgcAlQgLgLAAgPQAAgOALgKQALgKAPAAQAQAAAJANIAAAAIAAgSIgWAAIAAgJIAWAAIAAgJIAJAAIAAAJIAIAAIAAAJIgIAAIAABKIgJAAIAAgNIAAAAQgJAOgQAAQgQAAgKgKgAgWgHQgIAHAAALQAAANAIAHQAIAIAMAAQAKAAAIgIQAIgIAAgMQAAgLgIgHQgIgIgKAAQgNAAgHAIg");
	this.shape_45.setTransform(36,38.5);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgOALgLQALgKANAAQASAAAJAOIABAAIAAgMIAIAAIAABDIgIAAIAAgMIgBAAQgJAOgSAAQgNAAgLgLgAgTgTQgHAJAAAKQAAAMAHAIQAIAIALAAQAMAAAIgIQAIgJAAgLQAAgJgIgJQgIgJgMAAQgLAAgIAIg");
	this.shape_46.setTransform(23.5,39.6);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#373535").s().p("AgDA6IAAgQIAHAAIAAAQgAgDAjIAAhEIAHAAIAABEgAgDgqIAAgQIAHAAIAAAQg");
	this.shape_47.setTransform(18,39.6);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#373535").s().p("AgjAvIAAgsIgHAAIAAgHIAHAAIAAgqIAcAAQAHAAAHACQAIADAHADQAVAOAAAYQAAAZgVAOQgFACgKADQgHADgHAAgAgZAmIAPAAIAJAAIAGgBQAHgCAHgEQAGgGAFgJQADgHAAgJQAAgTgQgLQgFgEgJgCIgGgBIgIAAIgOAAIAAAhIAaAAIAAAHIgaAAg");
	this.shape_48.setTransform(11.9,38.4);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#373535").s().p("AgQAEIAAgHIAhAAIAAAHg");
	this.shape_49.setTransform(1.7,39.5);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#373535").s().p("AgbAvIAghIIgiAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_50.setTransform(278.2,23.2);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_51.setTransform(269.8,23.2);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#373535").s().p("AgMAtQgWgIAAgZIAAgYQAAgYAWgJQAGgCAGAAQAHAAAHADQAUAJAAAXIAAAYQABAMgFAHQgFAJgKAFQgGADgJAAQgFAAgHgDgAgHgWQgCAEgBAFIAAAaQABAGACAEQADAEAEAAQAGAAACgEQACgEABgGIAAgaQgBgFgCgEQgCgEgGAAQgEAAgDAEg");
	this.shape_52.setTransform(262.6,23.2);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#373535").s().p("AgfAvIAAgTIAPgKQAIgGAGgGIACgFIAEgEQAEgIAAgFQAAgJgIAAQgEAAgDAEQgCAEAAAGIgXAAIACgLQAAgGAEgEQAFgHAHgEQAIgDAGAAQALAAAHADQAIAFAEAIQACAFABAGQAAAHgEAHQgCAFgEAGIgWAVIAgAAIAAAUg");
	this.shape_53.setTransform(254.8,23.1);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#373535").s().p("AgbA1IAghpIAXAAIgfBpg");
	this.shape_54.setTransform(247.1,23.8);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#373535").s().p("AgcAvIAhhIIgiAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_55.setTransform(239.4,23.2);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#373535").s().p("AgNAtQgUgIgBgZIAAgYQABgYAUgJQAHgCAGAAQAIAAAGADQAVAJAAAXIAAAYQgBAMgEAHQgFAJgJAFQgIADgIAAQgFAAgIgDgAgHgWQgCAEAAAFIAAAaQAAAGACAEQADAEAEAAQAFAAAEgEQABgEAAgGIAAgaQAAgFgBgEQgDgEgGAAQgEAAgDAEg");
	this.shape_56.setTransform(231.6,23.2);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#373535").s().p("AgbA1IAfhpIAYAAIggBpg");
	this.shape_57.setTransform(224,23.8);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#373535").s().p("AgWAvIAVgcIAAgBIgCABIgDAAQgGAAgGgDQgRgIAAgTQAAgPAKgKQAKgKAPAAQASAAALAMQAHAJAAAOQAAAIgCADQgBAFgGAIIgXAigAgIgWQgDAEAAAFQAAAGADADQAEAEAEAAQAFAAAEgEQAEgDAAgFQAAgGgEgEQgEgDgFAAQgEAAgEADg");
	this.shape_58.setTransform(216.3,23.1);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#373535").s().p("AgNAtQgUgIAAgZIAAgYQAAgYAUgJQAHgCAGAAQAHAAAHADQAUAJABAXIAAAYQgBAKgFAJQgDAIgLAGQgHADgIAAQgFAAgIgDgAgHgWQgCAEgBAFIAAAaQABAGACAEQACAEAFAAQAFAAADgEQACgEABgGIAAgaQgBgFgCgEQgDgEgFAAQgFAAgCAEg");
	this.shape_59.setTransform(208.5,23.2);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#373535").s().p("AgQAuIAMgaIgbhBIAKAAIAVA1IAWg1IAKAAIgnBbg");
	this.shape_60.setTransform(197.6,25.6);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgOALgKQAKgLAOAAQASAAAJAOIAAAAIAAgMIAJAAIAABEIgJAAIAAgNIAAAAQgJAOgSAAQgOAAgKgKgAgSgEQgIAGAAAMQAAAMAIAIQAIAIAKAAQALAAAJgIQAIgIAAgMQAAgMgIgGQgJgJgLAAQgLAAgHAJgAgMgpIAEgIIAXAOIgEAHg");
	this.shape_61.setTransform(189.8,23);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#373535").s().p("AgSAqQgLgHgDgMIAJAAQAIASAQAAQAMAAAHgHQAHgHAAgMIAAgGIAAAAQgEAHgIAEQgGADgJAAQgOAAgKgKQgKgLAAgNQAAgPAKgLQALgLANAAQASAAAJAPIAAAAIAAgNIAJAAIAAA/IgBAHQgCAHgEAFQgJANgSAAQgLAAgJgHgAgSgfQgHAJAAALQAAALAHAHQAIAIAKAAQALAAAIgIQAJgHAAgLQAAgLgJgJQgIgJgLAAQgKAAgIAJg");
	this.shape_62.setTransform(181.1,25.7);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#373535").s().p("AAcAvIg2hRIAABRIgKAAIAAhdIANAAIAyBMIABAAIAAhMIAJAAIAABdg");
	this.shape_63.setTransform(172.3,23.2);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#373535").s().p("AgQAEIAAgHIAgAAIAAAHg");
	this.shape_64.setTransform(162.1,24.3);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#373535").s().p("AgEAvIAAg8IgOAAIAAgIIAOAAIAAgZIAHAAIAAAZIAQAAIAAAIIgQAAIAAA8g");
	this.shape_65.setTransform(154.3,23.2);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#373535").s().p("AgDA8IAAgQIAHAAIAAAQgAgYAbQgLgLAAgPQAAgNALgLQALgKANAAQASAAAJAOIAAgMIAJAAIAABDIgJAAIAAgMQgJAOgSAAQgNAAgLgLgAgSgRQgIAJAAAKQAAALAIAJQAIAIAKAAQAMAAAIgJQAIgJAAgLQAAgIgIgKQgIgIgMAAQgKAAgIAIgAAMgrIgLgJIgJAJIgLAAIASgQIAGAAIASAQg");
	this.shape_66.setTransform(147.7,24.2);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#373535").s().p("AAVAvIAAgnQAAgFgBgDQgBgEgFgFQgGgGgIAAQgIAAgGAGIgFAIIgBAIIAAAoIgJAAIAAhdIAJAAIAAAiQAHgLANAAQAOAAAIAKQAIAIAAANIAAAng");
	this.shape_67.setTransform(139.6,23.2);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#373535").s().p("AAbAvIg1hRIgBAAIAABRIgJAAIAAhdIANAAIAyBMIAAhMIAKAAIAABdg");
	this.shape_68.setTransform(131.1,23.2);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#373535").s().p("AgXArQgEgFgBgFIgBgMIAAgkIAJAAIAAAkQAAAMAFAGQAFAHAKAAQAHAAAHgGQAEgEACgFQABgFAAgHIAAgiIAJAAIAABDIgIAAIAAgLIgBAAQgDAHgGADQgGADgGAAQgOAAgJgLgAgBgXIAAgCIABgGIAAgCIACgBIABgCIACgCIABgDQAAAAAAgBQAAgBgBAAQAAAAAAgBQAAAAgBgBQAAAAgBgBQAAAAgBAAQAAAAgBgBQAAAAgBAAQgBAAgBADIgBACIAAAEIgIAAIAAgDQAAgEAEgEQAEgEADAAQAGAAAEADQAEAEAAAFQAAAEgCACIgCACIgDADIgBACIgCAFg");
	this.shape_69.setTransform(119,22.6);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#373535").s().p("AAVAvIAAgnQABgFgCgDQgCgGgEgDQgGgGgIAAQgGAAgIAGQgDAFgCADQgBADAAAFIAAAoIgJAAIAAhdIAJAAIAAAiIAAAAQAIgLAMAAQAOAAAIAKQAIAJAAAMIAAAng");
	this.shape_70.setTransform(111.3,23.2);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#373535").s().p("AgeAiQgOgOgBgUQABgTAOgOQANgOAUAAQAVAAAQAQIAFAJIgLAAQgKgQgWgBQgOABgMALQgLAMgBAPQABAQALAMQAMAMAPgBQAJABAJgGQAIgFAGgHIAKAAQgOAagcAAQgTAAgOgOg");
	this.shape_71.setTransform(102.3,23.2);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#373535").s().p("AgDA/IAAh9IAHAAIAAB9g");
	this.shape_72.setTransform(89.4,24.4);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#373535").s().p("AgNAtQgUgIgBgZIAAgYQABgYAUgJQAHgCAGAAQAHAAAHADQAVAJAAAXIAAAYQAAAMgGAHQgDAIgLAGQgGADgJAAQgGAAgHgDgAgHgWQgCAEAAAFIAAAaQAAAGACAEQACAEAFAAQAFAAADgEQADgEgBgGIAAgaQABgFgDgEQgCgEgGAAQgFAAgCAEg");
	this.shape_73.setTransform(77.7,23.2);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#373535").s().p("AgNAtQgUgIAAgZIAAgYQAAgYAUgJQAHgCAGAAQAHAAAHADQAVAIAAAYIAAAYQAAAMgFAHQgFAJgKAFQgGADgJAAQgFAAgIgDgAgHgWQgDAEAAAFIAAAaQAAAGADAEQADAEAEAAQAFAAAEgEQACgEAAgGIAAgaQAAgFgCgEQgDgEgGAAQgFAAgCAEg");
	this.shape_74.setTransform(69.9,23.2);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#373535").s().p("AgJAjIAAgWIATAAIAAAWgAgJgMIAAgWIATAAIAAAWg");
	this.shape_75.setTransform(64,24.4);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#373535").s().p("AgbAvIAhhIIgjAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_76.setTransform(58,23.2);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_77.setTransform(49.6,23.2);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#373535").s().p("AgQAKIAAgTIAhAAIAAATg");
	this.shape_78.setTransform(40.6,24.2);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#373535").s().p("AgNAtQgUgIgBgZIAAgYQABgYAUgJQAHgCAGAAQAHAAAIADQATAIABAYIAAAYQgBAMgEAHQgFAJgJAFQgIADgIAAQgFAAgIgDgAgHgWQgDAEABAFIAAAaQgBAGADAEQADAEAEAAQAFAAADgEQACgEAAgGIAAgaQAAgFgCgEQgCgEgGAAQgEAAgDAEg");
	this.shape_79.setTransform(31,23.2);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#373535").s().p("AgMAtQgVgIAAgZIAAgYQAAgYAVgJQAFgCAHAAQAHAAAHADQAUAIAAAYIAAAYQAAAMgEAHQgEAIgLAGQgGADgJAAQgFAAgHgDgAgHgWQgDAEAAAFIAAAaQAAAGADAEQADAEAEAAQAFAAADgEQADgEAAgGIAAgaQAAgFgDgEQgCgEgGAAQgFAAgCAEg");
	this.shape_80.setTransform(23.2,23.2);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#373535").s().p("AgJAjIAAgWIATAAIAAAWgAgJgMIAAgWIATAAIAAAWg");
	this.shape_81.setTransform(17.3,24.4);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#373535").s().p("AgPAtQgJgEgEgGIgEgIIgBgIIAYAAQACAIAHAAQAKAAAAgLQAAgGgIgDIgLAAIAAgQIAGAAIADgBQAFgCAAgGQAAgIgFAAQgHAAAAAIIgYAAQABgOAJgHQAJgIAMAAQAMAAAIAHQAJAHAAALQAAANgMAHQARAEAAARQAAANgLAIQgKAIgNAAQgHAAgIgDg");
	this.shape_82.setTransform(11.3,23.2);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_83.setTransform(2.9,23.2);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#373535").s().p("AgKAiIAAgVIAUAAIAAAVgAgKgMIAAgVIAUAAIAAAVg");
	this.shape_84.setTransform(49.2,9.2);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#373535").s().p("AgKAuIAAhbIAWAAIAABbg");
	this.shape_85.setTransform(45.2,8);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#373535").s().p("AgJBMIAAgTIATAAIAAATgAghAiQgPgOAAgUQAAgHADgLQADgGAEgEQAPgUAXAAQAUAAAOAOQAPAPAAATQAAATgPAPQgOAOgUAAQgTAAgOgOgAgRgSQgHAIAAAKQAAAKAHAIQAHAJAKAAQALAAAHgJQAHgHAAgLQAAgLgHgHQgIgJgKAAQgKAAgHAJgAAFg2IgFgHIgEAHIgUAAIATgVIALAAIAUAVg");
	this.shape_86.setTransform(37.7,8);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#373535").s().p("AASAuIgig3IABA3IgXAAIAAhbIAUAAIAjA5IgBg5IAXAAIAABbg");
	this.shape_87.setTransform(27.5,8);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#373535").s().p("AAUA/IgEgOIgfAAIgFAOIgZAAIAlhcIARAAIAlBcgAgJAeIASAAIgJgegAgTgvIAFgPIAeAQIgHANg");
	this.shape_88.setTransform(14,6.3);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#373535").s().p("AAPAuIAAglIgdAAIAAAlIgYAAIAAhbIAYAAIAAAjIAdAAIAAgjIAYAAIAABbg");
	this.shape_89.setTransform(4.4,8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,281.3,61.1);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgDAsIAAgeIgfg5IAKAAIAYAwIAZgwIAKAAIgfA5IAAAeg");
	this.shape.setTransform(150.8,19.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AAhAsIgNgeIgnAAIgNAeIgKAAIAnhXIAIAAIAmBXgAgQAGIAgAAIgQgng");
	this.shape_1.setTransform(143.7,19.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgfAgQgPgNAAgTQAAgSAOgNQAPgNARgBQAVABAPAQQADACADAHIgLAAQgFgJgIgEQgIgEgKAAQgOgBgLALQgMAMAAAOQAAAPAMALQALALAOAAQANAAAJgHQALgHADgMIgvAAIAAgIIA6AAQgCASgNAMQgNAMgTAAQgSAAgNgNg");
	this.shape_2.setTransform(134.2,19.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AAaAsIgzhMIAABMIgJAAIAAhXIAMAAIAwBIIAAhIIAJAAIAABXg");
	this.shape_3.setTransform(124.5,19.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgIA+IAAgQIAIAAIAAAQgAgeAXIgDgJIgBgJIAAg1IAJAAIABA9IACAIQAGALANAAQAKAAAGgLQABgBABgHIABg9IAJAAIAAACQAAAAABgBQAAAAABgBQAAAAAAgBQAAAAAAgBIgDAAIAAgKIALAAIAAAKIgCAFIgCADIgGAEIgBA0IgDAJQgHASgRgBQgUABgHgSg");
	this.shape_4.setTransform(113.3,20);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgkAsIAAhXIAaAAIANACIAOAFQAUAOAAAWQAAAXgUAOQgEACgKADQgFACgIAAgAgbAkIAXAAIAFgBQAHgCAHgEQAGgFAEgIQADgJAAgHQAAgSgPgKQgFgEgIgCIgHgBIgUAAg");
	this.shape_5.setTransform(104.6,19.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AAlAsIAAhNIgiBNIgGAAIgghNIAABNIgJAAIAAhXIANAAIAfBKIAghKIAOAAIAABXg");
	this.shape_6.setTransform(91.2,19.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAhAsIgNgeIgnAAIgNAeIgKAAIAnhXIAIAAIAlBXgAgQAGIAgAAIgQgng");
	this.shape_7.setTransform(81.2,19.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AAWAsIAAgqIgsAAIAAAqIgIAAIAAhXIAIAAIAAAnIAsAAIAAgnIAJAAIAABXg");
	this.shape_8.setTransform(72.7,19.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgDAsIAAhPIgUAAIAAgIIAvAAIAAAIIgUAAIAABPg");
	this.shape_9.setTransform(66,19.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgIA4IAAhWIAIAAIAABWgAgMgqIAWgNIADAHIgVANg");
	this.shape_10.setTransform(59.3,18.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AATAsIgcgnIgLAPIAAAYIgJAAIAAhXIAJAAIAAAxIAngxIALAAIghArIAhAsg");
	this.shape_11.setTransform(54.4,19.5);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AggAgQgOgNAAgTQAAgSAOgNQAPgNARgBQAVABAPAQIAGAJIgLAAQgFgJgIgEQgIgEgKAAQgOgBgMALQgLAMAAAOQAAAPAMALQALALAOAAQANAAAJgHQALgHADgMIgwAAIAAgIIA7AAQgCASgNAMQgNAMgTAAQgRAAgPgNg");
	this.shape_12.setTransform(41.8,19.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AAaAsIgzhMIAAAAIAABMIgJAAIAAhXIAMAAIAwBIIAAhIIAJAAIAABXg");
	this.shape_13.setTransform(32.1,19.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AAhA1IgNgeIgnAAIgNAeIgJAAIAmhXIAIAAIAlBXgAgQAPIAgAAIgQgngAgLgqQgGgDgCgHIAIAAQAEAGAHAAQAEAAACgCQAEgBADgDIAIAAQgDAHgGADQgFADgHAAQgFAAgGgDg");
	this.shape_14.setTransform(23.3,18.6);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFFFFF").s().p("AghAsIAAgqIgGAAIAAgGIAGAAIAAgnIAaAAIANACIAPAFQATAOABAWQgBAXgTAOQgGADgJACQgGACgHAAgAgYAkIAXAAIAFgBQAIgCAGgEQAGgEAEgJQAEgIAAgIQAAgSgQgKQgFgEgIgCIgGgBIgVAAIAAAfIAZAAIAAAGIgZAAg");
	this.shape_15.setTransform(14.2,19.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#373535").ss(0.8).p("AM1CAQAAAcgaATQgaAUgkAAI25AAQglAAgZgUQgagTAAgcIAAj/QAAgcAagUQAZgTAlAAIW5AAQAkAAAaATQAaAUAAAcg");
	this.shape_16.setTransform(82.1,19.6);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#000000").s().p("ArLCyQgkAAgZgSQgZgSAAgaIAAjoQAAgZAZgSQAZgSAkAAIWYAAQAjAAAZASQAZASAAAZIAADoQAAAagZASQgZASgjAAg");
	this.shape_17.setTransform(82.1,19.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1,-1,166.2,41.2);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#373535").s().p("AAnAvIAAhSIgkBSIgGAAIgihSIgBAAIAABSIgJAAIAAhdIAOAAIAhBOIAihOIAOAAIAABdg");
	this.shape.setTransform(195.5,55.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#373535").s().p("AgeAiQgPgPAAgTQAAgSAOgPQAPgOASAAQAWAAAPARIAGAJIgKAAQgMgRgVAAQgOAAgMAMQgLANAAANQAAAQAMALQALAMAOABQAKgBAJgEQAHgEAHgJIALAAQgOAageAAQgSAAgOgOg");
	this.shape_1.setTransform(184.6,55.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#373535").s().p("AAYAvIAAgsIgvAAIAAAsIgJAAIAAhdIAJAAIAAAqIAvAAIAAgqIAJAAIAABdg");
	this.shape_2.setTransform(175.1,55.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#373535").s().p("AgDAIIAAgOIAHAAIAAAOg");
	this.shape_3.setTransform(165.5,59.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#373535").s().p("AgdAvIAAhdIAkABQAHACAFADQAMAJAAAOQAAAOgMAHQgFADgHABIgbABIAAAmgAgUAAIAXAAIAHAAQALgFAAgMQAAgMgLgGIgHgCIgXAAg");
	this.shape_4.setTransform(162.2,55.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#373535").s().p("AgDAvIAAhUIgWAAIAAgJIAyAAIAAAJIgVAAIAABUg");
	this.shape_5.setTransform(155.4,55.9);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#373535").s().p("AgJAMIAJgXIAKAAIgKAXg");
	this.shape_6.setTransform(146.9,60.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#373535").s().p("AADAvIAAhUIgOAAIAAgJIAXAAIAABdg");
	this.shape_7.setTransform(141.6,55.9);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#373535").s().p("AAVAjIAAgkIgBgKQgCgHgEgCQgGgGgIAAQgIAAgFAGQgEACgCAHQgBAEAAAFIAAAlIgJAAIAAhEIAJAAIAAAJQAHgKANAAQAOAAAIAJQAIAIAAAQIAAAkg");
	this.shape_8.setTransform(131.3,57.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#373535").s().p("AgDA8IAAgQIAHAAIAAAQgAgYAbQgLgKAAgQQAAgOALgKQAKgKAOAAQASAAAJAOIAAgNIAJAAIAABEIgJAAIAAgMQgJANgSAAQgNABgLgLgAgSgRQgIAIAAAKQAAANAIAHQAIAIAKAAQAMAAAIgIQAIgHAAgNQAAgJgIgIQgIgJgMAAQgKAAgIAIgAAMgrIgLgJIgJAJIgMAAIATgQIAGAAIASAQg");
	this.shape_9.setTransform(123,57);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#373535").s().p("AgXAZQgEgGgBgFIgBgMIAAgkIAJAAIAAAkQAAAMAFAGQAFAHAKAAQAIAAAGgGQAEgDACgGQABgFAAgGIAAgjIAJAAIAABEIgIAAIAAgLIgBAAQgDAGgGADQgGADgGAAQgOAAgJgKg");
	this.shape_10.setTransform(114.9,57.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#373535").s().p("AAbAoQgLAIgQAAQgTAAgPgOQgPgOAAgUQAAgTAOgOQAPgOAUAAQAUAAAPAOQAPAPAAASQAAAUgPAOQAGAGAHAAIAAAIQgMAAgJgIgAgjATIAGAHQAMANARABQAMAAAIgHIgMgJQgLgIgRAAQgHABgIACgAAGAOIALAGIAKAJQAGgGAEgIQAEgGAAgJQAAgPgNgMQgMgMgQABQgPgBgNAMQgMAMAAAPQAAAFACAGQAKgDAKAAQAOAAAKAGg");
	this.shape_11.setTransform(105.6,55.9);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#373535").s().p("AgJAMIAJgXIAKAAIgKAXg");
	this.shape_12.setTransform(94.2,60.2);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#373535").s().p("AgNAjIAAhEIAJAAIAAALIAAAAQADgGADgEQADgBAJgBIAAAJQgSACAAAUIAAAmg");
	this.shape_13.setTransform(92.3,57.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#373535").s().p("AgXAZQgDgEgCgHIgBgMIAAgkIAJAAIAAAkQAAAMAFAGQAFAHAKAAQAIAAAGgGQAEgDACgGIABgLIAAgjIAJAAIAABEIgJAAIAAgLQgDAGgGADQgGADgGAAQgOAAgJgKg");
	this.shape_14.setTransform(86.1,57.2);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQAKgLAOAAQAOAAALALQALALAAANIgBADIg9AAQABALAIAHQAHAHAKAAQAIAAAGgEQAHgFADgHIAJAAQgEAKgJAHQgJAHgLAAQgOAAgKgLgAgRgUQgHAGgCALIA0AAQgBgLgIgGQgHgHgKAAQgJAAgIAHg");
	this.shape_15.setTransform(78.2,57.1);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#373535").s().p("AgEAvIAAg8IgOAAIAAgIIAOAAIAAgZIAHAAIAAAZIAQAAIAAAIIgQAAIAAA8g");
	this.shape_16.setTransform(72,55.9);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#373535").s().p("AgOAeQgGgGAAgJIAAgBIAJAAQAAAOALAAQAMAAABgMQAAgGgGgEIgPgGIgFgDQgFgFAAgIQAAgIAGgFQAFgGAHAAQAIAAAFAGQAGAFAAAIIgJAAQgBgLgJAAQgJAAAAALQAAAFAFADIAEACIAFACIAGADIAFACQAFAFAAAJQAAAVgVAAQgIAAgGgGg");
	this.shape_17.setTransform(67.3,57.1);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#373535").s().p("AgZAaQgKgLAAgPQAAgPALgJQAKgLAOAAQASAAAJAOIAAAAIAAgMIAJAAIAABDIgJAAIAAgMIAAAAQgJAOgSAAQgNAAgMgKgAgSgTQgJAJAAAKQAAAMAJAIQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgKgIgIQgIgJgMAAQgLAAgHAIg");
	this.shape_18.setTransform(60.4,57.1);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#373535").s().p("AgdAvIAAhdIAkABQAHACAFADQAMAJAAAOQAAAOgMAHQgFADgHABIgbABIAAAmgAgUAAIAWAAIAIAAQALgFAAgMQAAgMgLgGIgIgCIgWAAg");
	this.shape_19.setTransform(53.5,55.9);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#373535").s().p("AADAvIAAhUIgOAAIAAgJIAXAAIAABdg");
	this.shape_20.setTransform(41.9,55.9);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#373535").s().p("AgWAmQgIgJgBgPQAAgIAEgGIADgFIAagpIALAAIgUAgIAAAAQAEgCADAAQANAAAKAKQAJAHAAANQgBAOgIAKQgKAJgNAAQgMAAgKgJgAgPgBQgGAGAAAJQAAALAGAGQAGAIAJAAQAKAAAGgIQAHgHAAgKQAAgJgHgGQgGgGgKgBQgJABgGAGg");
	this.shape_21.setTransform(35.4,56);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#373535").s().p("AgQAEIAAgHIAhAAIAAAHg");
	this.shape_22.setTransform(26.3,57);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#373535").s().p("AgMAvIAUggQgEACgEAAQgNAAgJgJQgJgIAAgNQAAgOAKgJQAJgKAMAAQAOAAAJAKQAJAJAAAOQAAAGgEAHIgdAvgAgPgeQgGAGAAALQAAAKAGAFQAGAHAJAAQAKAAAGgIQAGgEAAgLQAAgKgGgGQgHgIgJAAQgJAAgGAIg");
	this.shape_23.setTransform(17.2,55.8);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#373535").s().p("AgJAtQgJgDgGgIQgFgIgBgKIAJAAQACAKAFAGQAHAHAHAAQAJAAAHgHQAGgIAAgJQAAgJgGgGQgGgIgKAAQgJAAgJAJIgHgBIAIguIAoAAIAAAJIggAAIgEAZQAHgEAHAAQAMAAAJAKQAKAIgBANQABANgKAKQgJAJgNAAQgEAAgFgCg");
	this.shape_24.setTransform(10.2,56);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#373535").s().p("AgEAvIAAg8IgPAAIAAgIIAPAAIAAgZIAHAAIAAAZIARAAIAAAIIgRAAIAAA8g");
	this.shape_25.setTransform(263.2,40.7);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#373535").s().p("AAWAjIAAgkQgBgGgBgEQgDgGgDgDQgFgGgJAAQgHAAgGAGQgEADgCAGQgBAEAAAFIAAAlIgJAAIAAhEIAJAAIAAAJIAAAAQAIgKAMAAQAOAAAJAJQAHAJAAAPIAAAkg");
	this.shape_26.setTransform(257.1,41.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_27.setTransform(252,40.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQAKgLAOAAQAOAAALALQALALAAANQAAAOgLALQgLALgOAAQgNAAgLgLgAgSgSQgIAIAAAKQAAALAIAJQAIAIAKAAQALAAAIgJQAIgIAAgLQAAgLgIgIQgIgIgLAAQgKAAgIAJg");
	this.shape_28.setTransform(246.6,41.9);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#373535").s().p("AgeAvIAAhdIAlABQAHACAEADQAMAIAAAOQAAAPgMAGQgDAEgIABIgGAAIgVAAIAAAngAgUAAIAWAAIAIAAQALgFAAgNQAAgMgLgFQgEgCgEAAIgCAAIgUAAg");
	this.shape_29.setTransform(239.6,40.7);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#373535").s().p("AgQAvIANgbIgbhCIAJAAIAVA2IAXg2IAJAAIgnBdg");
	this.shape_30.setTransform(228.7,43.2);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#373535").s().p("AgEAvIAAg8IgPAAIAAgIIAPAAIAAgZIAHAAIAAAZIARAAIAAAIIgRAAIAAA8g");
	this.shape_31.setTransform(223.1,40.7);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_32.setTransform(219.7,40.7);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#373535").s().p("AgeAiQgPgOAAgUQAAgSAPgPQAPgOARAAQAWAAAPARQADADADAGIgKAAQgMgSgVAAQgOAAgMAMQgLANAAAOQAAAQAMAMQALALAOABQALAAAIgGQAHgDAHgJIALAAQgOAageAAQgSAAgOgOg");
	this.shape_33.setTransform(213.3,40.7);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#373535").s().p("AAVAjIAAgkQAAgGgCgEQgBgGgDgDQgHgGgIAAQgHAAgGAGQgEACgCAHIgBAJIAAAlIgJAAIAAhEIAJAAIAAAJQAHgKANAAQAOAAAIAJQAIAIAAAQIAAAkg");
	this.shape_34.setTransform(200.8,41.9);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQAKgLAOAAQAOAAALALQALALAAANQAAAOgLALQgLALgOAAQgNAAgLgLgAgSgSQgIAIAAAKQAAALAIAJQAIAIAKAAQALAAAIgJQAIgIAAgLQAAgLgIgIQgIgIgLAAQgKAAgIAJg");
	this.shape_35.setTransform(192.7,41.9);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#373535").s().p("AgTAqQgKgHgCgMIAJAAQAHASAQAAQANAAAGgIQAHgHAAgLIAAgGIgBAAQgDAHgIADQgHAEgIAAQgMAAgMgKQgLgLAAgNQAAgPALgLQALgKANAAQASgBAIAOIABAAIAAgMIAIAAIAAA/IgBAHQAAAGgEAGQgKANgSAAQgLAAgKgHgAgSgfQgHAIgBAMQABALAHAHQAIAIAKAAQAMAAAHgIQAIgIAAgKQAAgLgIgJQgHgJgMABQgKgBgIAJg");
	this.shape_36.setTransform(184.1,43.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_37.setTransform(178.8,40.7);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgOALgLQALgKANAAQATAAAIAOIAAAAIAAgMIAJAAIAABDIgJAAIAAgMIAAAAQgJAOgSAAQgOAAgKgLgAgSgTQgIAIAAALQAAAMAIAIQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgKgIgIQgIgJgMAAQgLAAgHAIg");
	this.shape_38.setTransform(173.1,41.9);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f("#373535").s().p("AgTApQgIgIAAgNIAJAAQABAUARAAQAIgBAFgFQAFgFABgIQgBgJgGgFIgHgDIgOgFQgGgBgCgDQgIgFABgMQAAgKAHgIQAIgHAJAAQAKAAAIAHQAIAIAAALIgJAAQgBgHgFgFQgFgGgGAAQgFABgGAEQgEAEAAAIQAAAIAIAEQACACAFABIAFADQAKADAGAEQAHAHAAALQAAAMgJAHQgIAIgLAAQgKAAgJgHg");
	this.shape_39.setTransform(165.7,40.7);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f("#373535").s().p("AgDAvIAAhdIAHAAIAABdg");
	this.shape_40.setTransform(157.8,40.7);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgOALgLQALgKANAAQATAAAIAOIAAAAIAAgMIAJAAIAABDIgJAAIAAgMIAAAAQgJAOgSAAQgOAAgKgLgAgSgTQgIAIAAALQAAAMAIAIQAIAIAKAAQAMAAAIgIQAIgIAAgMQAAgKgIgIQgIgJgMAAQgLAAgHAIg");
	this.shape_41.setTransform(152.1,41.9);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f("#373535").s().p("AgNAjIAAhEIAJAAIAAALIABAAQACgGADgDQAFgDAHAAIAAAJQgSACAAAUIAAAmg");
	this.shape_42.setTransform(146.3,41.9);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f("#373535").s().p("AgEAvIAAg8IgOAAIAAgIIAOAAIAAgZIAGAAIAAAZIARAAIAAAIIgRAAIAAA8g");
	this.shape_43.setTransform(142,40.7);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f("#373535").s().p("AAVAjIAAgkQAAgGgBgEQgCgGgEgDQgGgGgIAAQgIAAgGAGQgDACgCAHIgBAJIAAAlIgJAAIAAhEIAJAAIAAAJQAHgKANAAQAOAAAIAJQAIAIAAAQIAAAkg");
	this.shape_44.setTransform(135.9,41.9);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQAKgLAOAAQAPAAAKALQALALAAANIAAADIg+AAQABAKAIAHQAIAIAJAAQAHAAAHgEQAHgEADgJIAKAAQgEAMgKAGQgIAHgMAAQgOAAgKgLgAgQgUQgHAGgDALIA1AAQgCgLgIgGQgHgHgKAAQgJAAgHAHg");
	this.shape_45.setTransform(127.9,41.9);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f("#373535").s().p("AgfAiQgOgOABgUQgBgTAOgOQAQgOARAAQAXAAAOARQAEAFACAEIgKAAQgMgSgVAAQgOAAgMAMQgLANAAAOQgBAQAMAMQANALANABQALAAAHgGQAKgEAFgIIAKAAQgOAagdAAQgTAAgOgOg");
	this.shape_46.setTransform(118.7,40.7);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f("#373535").s().p("AgQAvIAMgbIgbhCIAKAAIAVA2IAWg2IAKAAIgmBdg");
	this.shape_47.setTransform(106.6,43.2);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f("#373535").s().p("AgEAvIAAg8IgPAAIAAgIIAPAAIAAgZIAHAAIAAAZIARAAIAAAIIgRAAIAAA8g");
	this.shape_48.setTransform(101.1,40.7);

	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f("#373535").s().p("AgNAjIAAhEIAJAAIAAALQADgHADgCQAEgDAIAAIAAAJQgSACAAAUIAAAmg");
	this.shape_49.setTransform(97.3,41.9);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgNALgLQALgLANAAQAPAAAKALQALALAAANIAAADIg+AAQABAKAIAHQAIAIAJAAQAHAAAHgEQAHgEADgJIAKAAQgEAMgKAGQgIAHgMAAQgNAAgLgLgAgQgUQgHAGgDALIA1AAQgCgLgIgGQgHgHgKAAQgJAAgHAHg");
	this.shape_50.setTransform(90.9,41.9);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f("#373535").s().p("AgaAhIAAANIgJAAIAAhcIAJAAIAAAlQAJgOARAAQAOAAALAKQALAKAAAOQAAAPgLALQgKAKgPAAQgRAAgJgOgAgTgHQgIAHAAALQAAAMAIAIQAIAIALAAQALAAAIgIQAIgHAAgNQAAgLgIgHQgIgIgLAAQgLAAgIAIg");
	this.shape_51.setTransform(82.7,40.8);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_52.setTransform(76.9,40.7);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f("#373535").s().p("AgWAvIAAhdIAJAAIAABUIAkAAIAAAJg");
	this.shape_53.setTransform(73.3,40.7);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f("#373535").s().p("AgDAiIAAgQIAHAAIAAAQgAgDgRIAAgQIAHAAIAAAQg");
	this.shape_54.setTransform(64.6,41.9);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f("#373535").s().p("AApAjIAAgmQAAgKgDgGQgGgHgJAAQgKAAgFAHQgEAGAAAKIAAAmIgHAAIAAgmQAAgLgFgFQgEgHgKAAQgJAAgGAHQgEAFAAALIAAAmIgIAAIAAhEIAIAAIAAAIQAHgJAMAAQAQAAAGANQAIgNAPAAQAOAAAGAIQAIAJgBANIAAAng");
	this.shape_55.setTransform(56.9,41.9);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f("#373535").s().p("AgYA0QgLgLAAgPQAAgOALgMQAKgIAOAAQAOAAALAJQALALAAAPIgBACIg9AAQABALAIAHQAIAHAJAAQAHAAAHgEQAHgFADgHIAJAAQgDALgKAHQgJAGgLAAQgOAAgKgKgAgRAEQgHAHgCAKIA0AAQgBgKgIgHQgHgEgKAAQgJAAgIAEgAALgSIgLgKIgJAKIgMAAIASgQIAHAAIASAQgAALgfIAAgCQAAgDACgDIABgCIACgCIACgBIABgCIABgDQAAgBAAAAQAAgBAAAAQgBgBAAAAQAAgBgBAAQAAgBgBAAQAAAAAAAAQgBgBAAAAQgBAAAAAAQgDAAgCADIgBACIAAAEIgIAAIAAgDQAAgFAEgEQAFgDAFAAQAFAAAEADQAEAEAAAFIgCAGIgBABIgBABIgDADIgBACQgBABAAAEg");
	this.shape_56.setTransform(46.8,39.3);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f("#373535").s().p("AgDAvIAAhEIAHAAIAABEgAgDgeIAAgQIAHAAIAAAQg");
	this.shape_57.setTransform(41.4,40.7);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f("#373535").s().p("AgcAlQgLgLAAgPQAAgOALgKQALgKAPAAQAQAAAJANIAAAAIAAgSIgWAAIAAgJIAWAAIAAgJIAJAAIAAAJIAIAAIAAAJIgIAAIAABKIgJAAIAAgNIAAAAQgJAOgQAAQgQAAgKgKgAgWgHQgIAHAAALQAAANAIAHQAIAIAMAAQAKAAAIgIQAIgIAAgMQAAgLgIgHQgIgIgKAAQgNAAgHAIg");
	this.shape_58.setTransform(36,40.8);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f("#373535").s().p("AgYAZQgLgKAAgPQAAgOALgLQALgKANAAQASAAAJAOIABAAIAAgMIAIAAIAABDIgIAAIAAgMIgBAAQgJAOgSAAQgNAAgLgLgAgSgTQgIAJAAAKQAAAMAIAIQAHAIALAAQAMAAAIgIQAIgJAAgLQAAgJgIgJQgIgJgMAAQgLAAgHAIg");
	this.shape_59.setTransform(23.5,41.9);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f("#373535").s().p("AgDA6IAAgQIAHAAIAAAQgAgDAjIAAhEIAHAAIAABEgAgDgqIAAgQIAHAAIAAAQg");
	this.shape_60.setTransform(18,41.9);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f("#373535").s().p("AgjAvIAAgsIgHAAIAAgHIAHAAIAAgqIAcAAQAIAAAGACQAIADAHADQAVAOAAAYQAAAZgVAOQgFACgKADQgHADgHAAgAgZAmIAPAAIAIAAIAHgBQAHgCAHgEQAGgGAFgJQADgHAAgJQABgTgRgLQgFgEgJgCIgGgBIgIAAIgOAAIAAAhIAbAAIAAAHIgbAAg");
	this.shape_61.setTransform(11.9,40.7);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f("#373535").s().p("AgQAEIAAgHIAhAAIAAAHg");
	this.shape_62.setTransform(1.7,41.8);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f("#373535").s().p("AgbAvIAghIIgiAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_63.setTransform(266,25.5);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_64.setTransform(257.6,25.5);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f("#373535").s().p("AgMAtQgWgIAAgZIAAgYQAAgYAWgJQAGgCAGAAQAHAAAHADQAUAIAAAYIAAAYQABAMgFAHQgFAJgKAFQgGADgJAAQgFAAgHgDgAgHgWQgCAEgBAFIAAAaQABAGACAEQADAEAEAAQAGAAACgEQACgEABgGIAAgaQgBgFgCgEQgCgEgGAAQgEAAgDAEg");
	this.shape_65.setTransform(250.4,25.5);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f("#373535").s().p("AgfAvIAAgTIAPgKQAIgGAGgGIAHgJQADgIAAgFQAAgJgIAAQgEAAgDAEQgCAEAAAGIgXAAIACgLQABgHADgDQAFgHAHgEQAIgDAGAAQALAAAHADQAIAFAEAIQACAFABAGQAAAHgEAHQgCAFgEAGIgWAVIAgAAIAAAUg");
	this.shape_66.setTransform(242.5,25.4);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f("#373535").s().p("AgbA1IAghpIAXAAIgfBpg");
	this.shape_67.setTransform(234.9,26.1);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f("#373535").s().p("AgcAvIAhhIIgiAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_68.setTransform(227.2,25.5);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f("#373535").s().p("AgNAtQgUgIgBgZIAAgYQABgYAUgJQAHgCAGAAQAHAAAIADQATAJABAXIAAAYQgBAMgEAHQgFAJgJAFQgIADgIAAQgFAAgIgDgAgHgWQgCAEAAAFIAAAaQAAAGACAEQADAEAEAAQAFAAAEgEQABgEAAgGIAAgaQAAgFgBgEQgDgEgGAAQgEAAgDAEg");
	this.shape_69.setTransform(219.4,25.5);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f("#373535").s().p("AgbA1IAfhpIAYAAIggBpg");
	this.shape_70.setTransform(211.7,26.1);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f("#373535").s().p("AgWAoQgLgIAAgNQAAgSAPgFQgJgGAAgLQAAgLAIgIQAIgHALAAQAMAAAHAHQAJAHAAAMQAAALgJAGQAPAFAAASQAAANgLAIQgKAIgNAAQgMAAgKgIgAgJAQQAAALAJAAQAEAAADgDQADgEAAgEQAAgKgKgBQgJABAAAKgAgHgUQAAAKAHgBQAIABAAgKQAAgIgIAAQgHAAAAAIg");
	this.shape_71.setTransform(204,25.5);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f("#373535").s().p("AgNAtQgUgIAAgZIAAgYQAAgYAUgJQAHgCAGAAQAHAAAHADQAUAJABAXIAAAYQgBAKgFAJQgDAIgLAGQgHADgIAAQgFAAgIgDgAgHgWQgCAEgBAFIAAAaQABAGACAEQACAEAFAAQAFAAADgEQACgEABgGIAAgaQgBgFgCgEQgDgEgFAAQgFAAgCAEg");
	this.shape_72.setTransform(196.2,25.5);

	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f("#373535").s().p("AgQAuIAMgaIgbhBIAKAAIAVA1IAWg1IAKAAIgmBbg");
	this.shape_73.setTransform(185.4,27.9);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f("#373535").s().p("AgYAoQgLgLAAgPQAAgOALgKQAKgLAOAAQASAAAJAOIAAAAIAAgMIAJAAIAABEIgJAAIAAgNIAAAAQgJAOgSAAQgOAAgKgKgAgSgEQgIAGAAAMQAAAMAIAIQAIAIAKAAQALAAAJgIQAIgIAAgMQAAgMgIgGQgJgJgLAAQgKAAgIAJgAgMgpIAEgIIAXAOIgEAHg");
	this.shape_74.setTransform(177.5,25.3);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f("#373535").s().p("AgSAqQgLgHgDgMIAJAAQAIASAQAAQAMAAAHgHQAHgHAAgMIAAgGIAAAAQgEAHgIAEQgGADgJAAQgOAAgKgKQgKgLAAgNQAAgPAKgLQALgLANAAQASAAAJAPIAAAAIAAgNIAJAAIAAA/IgBAHQgCAHgEAFQgJANgSAAQgLAAgJgHgAgSgfQgHAJAAALQAAALAHAHQAIAIAKAAQALAAAIgIQAJgHAAgLQAAgLgJgJQgIgJgLAAQgKAAgIAJg");
	this.shape_75.setTransform(168.9,28);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f("#373535").s().p("AAcAvIg2hRIAABRIgKAAIAAhdIANAAIAyBMIABAAIAAhMIAJAAIAABdg");
	this.shape_76.setTransform(160.1,25.5);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f("#373535").s().p("AgQAEIAAgHIAhAAIAAAHg");
	this.shape_77.setTransform(149.8,26.6);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f("#373535").s().p("AgQAuIANgaIgbhBIAJAAIAVA1IAXg1IAJAAIgnBbg");
	this.shape_78.setTransform(140.8,27.9);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f("#373535").s().p("AgZArQgKgKAAgQQAAgPALgJQAKgKAOAAQASAAAJAOIAAAAIAAgMIAJAAIAABDIgJAAIAAgMIAAAAQgJAOgSAAQgNAAgMgLgAgSgBQgJAHABAMQAAALAIAJQAIAIAKAAQALAAAJgJQAIgJAAgLQAAgKgIgIQgJgIgLAAQgKAAgIAIgAgBgXIAAgCIABgGIABgDIACgCIABgCIACgDQAAAAgBgBQAAgBAAAAQAAAAAAgBQgBAAAAgBQAAAAgBgBQAAAAgBAAQAAAAgBgBQgBAAAAAAQgBAAgCADIgBAGIgIAAIAAgDQAAgEAFgEQAEgEADAAQAGAAADADQAEAEAAAFQAAAEgCACIgBACIgBAAIgCADIgBACIgCAFg");
	this.shape_79.setTransform(133,24.9);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f("#373535").s().p("AgcguIAXAAQAJAAAGAEQAJAEADAIQACAEAAAFQAAAHgDAEQgCAEgFAEQAPAFAAARQAAAOgKAHQgEACgHADIgkABgAgTAmIASAAIACAAIAJgCQAKgFAAgLQAAgMgLgEIgJgCIgTAAgAgTgFIAQAAIADAAIAHgCQAIgFAAgJQAAgFgEgFQgDgEgGgBIgDgBIgSAAg");
	this.shape_80.setTransform(125.4,25.5);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f("#373535").s().p("AgcAoQgDgEgCgHIgBgLIAAglIAJAAIAAAkQAAAMAFAGQAFAHALAAQAGAAAHgFQAEgFACgFQABgEAAgHIAAgjIAJAAIAAACIAAAAQADgCAAgCIgEAAIAAgLIALAAIAAALQAAADgCACIgFAGIgDACIAAA5IgIAAIAAgLIgBAAQgDAGgGADQgGADgFAAQgPAAgJgKgAgOgjIAXgOIAEAIIgXANg");
	this.shape_81.setTransform(114.6,25.3);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f("#373535").s().p("AAVAvIAAgnIgBgIQgDgGgDgDQgFgGgJAAQgHAAgGAGQgEADgCAFQgBADAAAFIAAAoIgJAAIAAhdIAJAAIAAAiQAIgLAMAAQAOAAAJAKQAHAJAAAMIAAAng");
	this.shape_82.setTransform(106.4,25.5);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f("#373535").s().p("AgDAvIAAhUIgWAAIAAgJIAzAAIAAAJIgWAAIAABUg");
	this.shape_83.setTransform(99.8,25.5);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f("#373535").s().p("AgDA/IAAh9IAHAAIAAB9g");
	this.shape_84.setTransform(89.4,26.7);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f("#373535").s().p("AgNAtQgUgIgBgZIAAgYQABgYAUgJQAHgCAGAAQAIAAAGADQAVAJAAAXIAAAYQAAAMgGAHQgDAIgLAGQgGADgJAAQgGAAgHgDgAgIgWQgBAEAAAFIAAAaQAAAGABAEQAEAEAEAAQAFAAADgEQADgEgBgGIAAgaQABgFgDgEQgCgEgGAAQgFAAgDAEg");
	this.shape_85.setTransform(77.7,25.5);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f("#373535").s().p("AgNAtQgUgIAAgZIAAgYQAAgYAUgJQAHgCAGAAQAHAAAHADQAVAIAAAYIAAAYQAAAMgFAHQgFAJgJAFQgIADgIAAQgFAAgIgDgAgHgWQgCAEAAAFIAAAaQAAAGACAEQADAEAEAAQAGAAADgEQABgEAAgGIAAgaQAAgFgBgEQgDgEgGAAQgEAAgDAEg");
	this.shape_86.setTransform(69.9,25.5);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f("#373535").s().p("AgKAjIAAgWIAUAAIAAAWgAgKgMIAAgWIAUAAIAAAWg");
	this.shape_87.setTransform(64,26.7);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f("#373535").s().p("AgbAvIAhhIIgjAAIAAgVIA7AAIAAATIgfBKg");
	this.shape_88.setTransform(58,25.5);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_89.setTransform(49.6,25.5);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f("#373535").s().p("AgQAKIAAgTIAhAAIAAATg");
	this.shape_90.setTransform(40.6,26.5);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f("#373535").s().p("AgMAtQgWgIAAgZIAAgYQAAgYAWgJQAGgCAGAAQAHAAAIADQATAIAAAYIAAAYQAAAMgEAHQgFAJgJAFQgIADgIAAQgFAAgHgDgAgHgWQgDAEABAFIAAAaQgBAGADAEQADAEAEAAQAGAAACgEQACgEAAgGIAAgaQAAgFgCgEQgCgEgGAAQgEAAgDAEg");
	this.shape_91.setTransform(31,25.5);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f("#373535").s().p("AgMAtQgVgIAAgZIAAgYQAAgYAVgJQAFgCAHAAQAHAAAHADQAUAIAAAYIAAAYQAAAMgEAHQgEAIgLAGQgGADgJAAQgFAAgHgDgAgHgWQgDAEAAAFIAAAaQAAAGADAEQADAEAEAAQAFAAADgEQADgEAAgGIAAgaQAAgFgDgEQgCgEgGAAQgFAAgCAEg");
	this.shape_92.setTransform(23.2,25.5);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f("#373535").s().p("AgJAjIAAgWIATAAIAAAWgAgJgMIAAgWIATAAIAAAWg");
	this.shape_93.setTransform(17.3,26.7);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f("#373535").s().p("AgPAtQgJgEgEgGIgEgIIgBgIIAYAAQACAIAHAAQAKAAAAgLQAAgGgIgDIgLAAIAAgQIAGAAIADgBQAFgCAAgGQAAgIgFAAQgHAAAAAIIgYAAQABgOAJgHQAJgIAMAAQAMAAAIAHQAJAHAAALQAAANgMAHQARAEAAARQAAANgLAIQgKAIgNAAQgHAAgIgDg");
	this.shape_94.setTransform(11.3,25.5);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f("#373535").s().p("AgDAvIAAhIIgPAAIAAgVIAlAAIAABdg");
	this.shape_95.setTransform(2.9,25.5);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f("#373535").s().p("AgJAiIAAgVIATAAIAAAVgAgJgMIAAgVIATAAIAAAVg");
	this.shape_96.setTransform(88.6,11.5);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f("#373535").s().p("AAPAuIAAglIgdAAIAAAlIgYAAIAAhbIAYAAIAAAjIAdAAIAAgjIAYAAIAABbg");
	this.shape_97.setTransform(82.1,10.3);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f("#373535").s().p("AATAuIgig3IAAA3IgXAAIAAhbIAVAAIAiA5IgBg5IAXAAIAABbg");
	this.shape_98.setTransform(72.5,10.3);

	this.shape_99 = new cjs.Shape();
	this.shape_99.graphics.f("#373535").s().p("AgLAuIAAhbIAXAAIAABbg");
	this.shape_99.setTransform(65.6,10.3);

	this.shape_100 = new cjs.Shape();
	this.shape_100.graphics.f("#373535").s().p("AAbAuIABhEIgBAAIgUBEIgNAAIgUhEIgBAAIABBEIgWAAIAAhbIAfAAIARA7IAAAAIASg7IAfAAIAABbg");
	this.shape_100.setTransform(57.8,10.3);

	this.shape_101 = new cjs.Shape();
	this.shape_101.graphics.f("#373535").s().p("AgRA/IAAhcIAWAAIAABcgAgRgtIAcgRIAHAPIgeAOg");
	this.shape_101.setTransform(46.6,8.6);

	this.shape_102 = new cjs.Shape();
	this.shape_102.graphics.f("#373535").s().p("AAPAuIAAglIgdAAIAAAlIgYAAIAAhbIAYAAIAAAjIAdAAIAAgjIAYAAIAABbg");
	this.shape_102.setTransform(39.2,10.3);

	this.shape_103 = new cjs.Shape();
	this.shape_103.graphics.f("#373535").s().p("AghAiQgOgOAAgUQAAgTAOgOQAPgOASAAQAbAAAPAWQAEAIACAHIgZAAQgHgQgQAAQgJAAgIAIQgGAHAAALQAAALAGAIQAIAIAJAAQAPAAAIgQIAZAAQgEARgNAKQgNAKgSAAQgSAAgPgOg");
	this.shape_103.setTransform(29.2,10.3);

	this.shape_104 = new cjs.Shape();
	this.shape_104.graphics.f("#373535").s().p("AghA+QgPgOAAgUQAAgLAEgJQACgFAEgEQAPgTAXAAQAUAAAOAOQAPAMAAAVQAAAUgPAOQgNAOgVAAQgSAAgPgNgAgRAHQgHAIAAALQAAAMAHAIQAIAIAJAAQALAAAHgIQAHgIAAgLQAAgMgHgIQgHgHgLAAQgKAAgHAHgAAFgbIgFgHIgEAHIgVAAIAUgVIAMAAIATAVgAgIg7IAGgPIAdAQIgFAMg");
	this.shape_104.setTransform(14.6,7.6);

	this.shape_105 = new cjs.Shape();
	this.shape_105.graphics.f("#373535").s().p("AAPAuIAAglIgdAAIAAAlIgYAAIAAhbIAYAAIAAAjIAdAAIAAgjIAYAAIAABbg");
	this.shape_105.setTransform(4.4,10.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_105},{t:this.shape_104},{t:this.shape_103},{t:this.shape_102},{t:this.shape_101},{t:this.shape_100},{t:this.shape_99},{t:this.shape_98},{t:this.shape_97},{t:this.shape_96},{t:this.shape_95},{t:this.shape_94},{t:this.shape_93},{t:this.shape_92},{t:this.shape_91},{t:this.shape_90},{t:this.shape_89},{t:this.shape_88},{t:this.shape_87},{t:this.shape_86},{t:this.shape_85},{t:this.shape_84},{t:this.shape_83},{t:this.shape_82},{t:this.shape_81},{t:this.shape_80},{t:this.shape_79},{t:this.shape_78},{t:this.shape_77},{t:this.shape_76},{t:this.shape_75},{t:this.shape_74},{t:this.shape_73},{t:this.shape_72},{t:this.shape_71},{t:this.shape_70},{t:this.shape_69},{t:this.shape_68},{t:this.shape_67},{t:this.shape_66},{t:this.shape_65},{t:this.shape_64},{t:this.shape_63},{t:this.shape_62},{t:this.shape_61},{t:this.shape_60},{t:this.shape_59},{t:this.shape_58},{t:this.shape_57},{t:this.shape_56},{t:this.shape_55},{t:this.shape_54},{t:this.shape_53},{t:this.shape_52},{t:this.shape_51},{t:this.shape_50},{t:this.shape_49},{t:this.shape_48},{t:this.shape_47},{t:this.shape_46},{t:this.shape_45},{t:this.shape_44},{t:this.shape_43},{t:this.shape_42},{t:this.shape_41},{t:this.shape_40},{t:this.shape_39},{t:this.shape_38},{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,269.1,63);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#373535").s().p("AgmCPQgRgMgBgkQABgogCgPQgFglACgjQABgrAKgeQALgiAggIQAdgJAcAXIAAAAIAGA/QACAugWgBQgSgCgDgMIABgaQACg3gTACQgRACgCAsQgBAXACAlIgCAeQgBARACAOQABAKAAAWQAAASAJAKQASAWALgkIAJg0IADgKQACgFAFgBQAHgCAHAFQAHAEABAHQADALgJAXQgKAbAAAHQgCAQgEAEQgDAFgOAGQgTAIgKACIgHAAQgNAAgLgHgAgoBcIABAAIgBgDIgBAAgAgsBPIAAAEIgBABIADABIACADIAAgBIgBgCIABAAQABAAAAAAQAAAAAAAAQAAAAAAgBQAAAAgBAAIAAgBIABgBIgBgDIAAgDIAAAAIACgEIAAgEIgBgBIAAAAIABgCIgBgEIACgDIAAgEQABgEgBgCQAAAAAAAAQAAAAAAAAQgBAAAAAAQgBAAAAAAIAAAAIAAgBIAAgCIgBgCIABgBQAAAAAAAAQABgBAAAAQAAgBAAAAQAAgBAAAAQABAAAAgBQAAAAAAAAQAAgBgBAAQAAAAgBgBIgBAAQgBAAAAAAQAAgBAAAAQAAAAABgBQAAAAABgBQABgBAAgBQABAAgBgBQAAAAAAgBQgBAAgBgBIgDAAIAAAFQAAABAAAAQAAABAAAAQABABAAAAQAAAAAAAAIgBAAQAAABAAAAQAAAAAAABQAAAAAAABQAAABAAAAIgCAFIACACIgCAEQgBABAAAAQAAABAAAAQAAABAAAAQAAABABAAIACAAIACgEIABgBIAAADQAAAEgCACQgBABAAAAQAAABAAAAQgBABABAAQAAABAAAAIACACIAAABIgBgBIgCAAQAAAAAAAAQAAABAAAAQAAAAAAAAQABABAAAAQABAAAAABQAAAAABAAQAAABAAAAQAAABAAAAIgCAAIAAABQABAAAAABQAAAAAAAAQAAAAABABQAAAAAAAAIgBADIgBAAIgBADgAglAfIAAACQgBABAAAAQAAABAAAAQAAABABAAQAAAAABAAIABAAQgBAAAAAAQAAAAAAgBQAAAAAAAAQAAAAABgBIABgBIAAgBIgBgDIgCAAgAgnAcIADAAIACgGQABgEgBgCIgCgCIABgBQABgEACgDQAAAAAAAAQAAgBABAAQAAAAgBgBQAAAAAAAAIgFAAIABgBIABgCIgCgBIgCAAQAAAAgBAAQAAAAAAAAQAAAAAAABQAAAAAAAAIAAACIABACQgBABAAAAQgBAAAAABQAAAAgBABQAAAAAAABIgBADQAAABAAAAQAAAAABABQAAAAABAAQAAABABAAIAAAAIgDAGIAAADIABAEIABAAIABgCg");
	this.shape.setTransform(162.6,114.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#373535").s().p("AgWCxQgQgGgHgQQgFgLgDgVQgEgfAAgqIAChIQACgYgBgLIgDgNIgDgNIgBgMQABgEAJgEQALgHAPACQALACAHAIQAGAHgBAGIgDAPQgDAPgBAYIgBAlIgDBUQADBDAVgEQAWgDgBgoQgGgsACgKIAAgBQACgZAAgiIAAg8IAAgXQABgPAGgFQAOgLAGAPQAEALgCANQgBAMACAVQADAXgBAKIgBBJQACAjgFAcQgBALgBAUQgDAOgRAEQgLADgWABIgLACIgGABIgIgCgAgtBCIABADIACAAIgBgEIgBAAIgBABgAgsA/IgBgEIABAAQAAgBABAAQAAAAAAgBQAAAAAAAAQgBAAAAAAQAAAAAAgBQgBAAAAAAQAAAAAAAAQAAgBABAAIAAgCIAAgEIgBgFIABAAIABgGIAAgGIgBgBIAAAAIABgDIAAgEIgBgDIABgEIABgHIAAgIIgCgBIAAgCQgBgBAAAAQAAgBAAAAQgBAAAAgBQAAAAABAAIABgBIACgFQAAgEgCgBIgBgBQgBAAAAAAQAAAAAAgBQAAAAAAAAQABAAAAgBIACgCQADgEgEgDIgEAAIABAEIgBADQAAABAAABQAAAAAAABQAAAAABABQAAAAAAAAIgBABQgBACABAEQAAACgCAFIABACIABAAIgCAGQgCAEACACIABAAIABAAIACgFIABgDIAAAFQgBAHgCACQgBADABADIABADQgBgBAAAAQAAAAAAAAQgBAAAAAAQAAAAAAABQgBAAAAABQAAAAABABQAAAAAAABQABAAAAABQABAAAAABQAAAAABAAQAAABAAABQAAAAAAABIgCAAIAAACQAAAAABAAQAAABAAAAQAAABAAAAQABABAAAAIgBAEIgBABIAAAEIAAAEIAAACIgBABQAAABAAAAQAAAAABAAQAAABAAAAQABAAABAAIAAABIACAEIAAAAIAAAAgAAvgRIAAABIABACIABAAIAAgCIAAgBIAAgCIABgCIABgBIgCgCIAAAAIACgDIgBgCIAAgCIABAAIAAgCIAAgBIAAgCIAAAAIAAgCIACgCIgBgCIAAAAQAAgBAAAAQABgBAAAAQAAgBAAAAQAAgBAAAAIgBAAIgBACIgBABIACgFIABgDIgBAAIABAAIgBgCIgBgBIACgBIgBgBIAAgCIABAAIAAgCIAAgCIABAAIgBgBIgCgBIABABIgBAAIAAABIAAAEIgBACIAAAHIgBABIAAACIAAADIABABIAAACIAAABIgBACIAAABIABAAIgBACIgBABIAAAAIAAgBQAAgBABAAQAAAAAAAAQAAAAgBgBQAAAAAAAAIAAABIgBABIAAACIABAAIAAAAIAAAAIAAABIgBABIAAACQgBABAAAAQAAABAAAAQAAAAAAABQAAAAABAAIAAABIAAABQAAAAgBABQAAAAAAABQAAAAAAABQgBAAAAABIAAABIABABIABgBgAgpgZIgBADIAAADQAAABgBAAQAAABAAAAQAAABABAAQAAABABAAIABAAQgBAAAAgBQAAAAAAAAQAAAAAAgBQAAAAABAAIACgDIgBgCIAAgDIgBgBIgBABgAgrgbIACAAIACgFIABgFIAAgJIgCgCIABgCIADgLQABAAAAgBQAAAAAAgBQAAAAAAgBQAAAAAAAAQgBgBAAAAQgBAAAAAAQgBAAAAAAQgBAAgBABIABgCIAAgCQABgCgCgEIgCAAIgBAFIAAADIABADIgEAGIgBAFIADAEIAAABIgDAJIABAKIABAAIABgDIABAEgAAxgfIABAAIgBABgAAygfgAgHiAQgFgJAMgMIARgQQAIgKAGgCQAJgDAIAKQAIAJgGAFQgDACgLAFQgGAFgPAPQgHAGgGAAQgEAAgFgFgAANiCIgBAAIABgBIAAgBIADgBIgDgBIgBAAIABACIgBAAIgBAAIABAAIAAgCIgBAAIAAAAIgBABIAAABIAAABIAAAAIACABIAAgCIAAACIAAAAIABAAgAALiCIABAAIAAAAgAAHiCIAAAAIAAAAgAACiEQABAAAAABQAAAAABAAQAAABABAAQAAAAABAAIABAAIgBgBIAAgBIAAgBIAAAAIAAAAIAAgBIAAAAIAAAAIgBAAIAAAAIABAAIAAgBIAAAAIAAAAIgBAAIAAAAIABAAIgBABIAAgBIgBABIAAAAIABAAIAAACIAAAAIAAgBIgBABIAAAAIAAAAIgBAAIgBAAgAAJiEIAAABIAAAAIAAgBgAAJiFIABABIAAgBIAAAAIgBAAIAAAAIAAAAIAAAAIAAAAIAAABIAAgBIAAAAgAAJiEIgBgBIABAAIAAAAIgBAAIgBAAIABAAIAAAAIAAAAIABABgAACiEIgBgCIAAAAIAAAAIAAgCIABAAIAAgBIgCAAIABAAIgBgBIAAABIgBAAIAAgCIABABIAAAAIAAAAIAAAAIABAAIAAAAIgBAAIAAAAIABgBIAAAAIAAAAIgBAAIAAABIAAAAIAAgBIAAgBIAAAAIAAAAIAAAAIAAgBIABAAIAAABIAAAAIAAABIAAAAIABAAIAAAAIAAAAIABgBIgBAAIAAAAIAAAAIgBAAIAAgBIAAAAIgBgBIABAAIgBAAIABAAIAAAAIABAAIAAAAIgBAAIABgBIAAgBIABAAIABAAIAAABIACAAIAAAAIgBgBQAAAAAAAAQAAAAAAAAQAAAAAAAAQgBAAAAAAIgCAAIgEAAIABAFIAAAAIgBAAIgBACIACABQgBAAAAABQgBAAAAAAQAAABAAAAQAAAAABABIAEABIAAAAgAAJiGIABAAIAAAAIAAAAIAAABIAAgBIAAAAIAAAAIAAgBgAAGiGIABAAIAAABIAAAAIAAgBIACAAIgBAAIAAgBIgBAAIAAAAIABAAIgBABIAAAAIAAAAgAAGiFIABAAIgBgBgAAGiHIAAAAIABAAIgBAAgAAJiHIABAAIAAgBIgBAAIABABIgBgBgAAIiHIAAAAIAAgBgAAEiIIABAAIAAAAgAAIiIIABAAIgBAAIAAAAgAAHiIIAAAAIABAAIgBAAIAAgBIAAAAIAAABIAAAAIAAAAIAAAAgAALiIIABAAIAAgCIgCAAIgCgEIAAADIAAAAIAAAAIAAAAIAAAAIAAAAIABAAIAAAAIABABIABACgAAIiIIAAgBIAAAAgAAEiJIAAAAIAAAAgAACiKIAAABIAAAAIABAAIAAgBIAAAAIAAAAIAAAAIAAAAIgBAAgAAFiKIAAABIABgBIAAAAIAAAAIAAAAIAAAAIgBAAgAAHiKIABAAIgBAAIAAAAIAAAAIgBAAIAAAAIABAAgAAFiKIAAAAIgBAAgAAGiKIABAAIAAgBIABAAIAAAAIgBAAIgBAAIAAABgAABiLIAAABIAAgBIAAAAgAAEiLIAAAAIAAAAIAAgBIAAAAgAADiLIAAAAIAAAAgAAGiLIABAAIgBgBgAADiMIABAAIgBAAgAAGiMIABAAIAAAAgAAEiMIABAAIAAgBIgBABgAACiMIABAAIgBgBgAAIiFIAAAAIAAAAIAAAAgAAFiGIAAAAgAABiMIAAAAIABAAIgBAAgAAAiOIAAAAIAAAAg");
	this.shape_1.setTransform(147.2,111.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#373535").s().p("AAHCTQgHgBAAABQgRgCgDgSIACgiIAAguQgBgeABgRQABgOAAgdIAAgtQgBggACgLQAEgRAaADIgGABQANALAAAbQAAAOgEAcQgCArABAkIABBCQAAAmgDAbQAAAAAAAAQgBAAAAABQAAAAgBAAQAAAAgBAAIgEAAgAgDgJQAAAAAAABQAAAAAAABQABAAAAABQAAABABABIABAAIAAgEIAAgCIAAgCQAAAAACgEIABgDIgDgDIADgGIgBgDIAAgDIgBAAIgBABIAAgCIgCAAIgCAGQgBAEABACIACACIgBABQgBAEgCADQAAAAgBAAQAAABAAAAQAAAAAAABQAAAAABAAQAAAAABAAQAAABABAAQAAAAABgBQABAAAAAAgAAAhOQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAIABABIgBACQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIAAACIAAADIAAAFQgBACABADIAAABIAAAAIAAACIABACIgBABIAAADIAAADIABABIgBADQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAABQAAAAABAAQAAAAABAAQAAAAABAAQAAAAAAAAIAAgCIAAgDIgBgCIABgBIAAgEIADgEIgCgDIAAAAQAEgFgBgDIgDAAIgCAEIgBABIAAgDIADgFQAAgBABAAQAAgBAAgBQAAAAAAgBQAAAAgBgBIAAgBIACAAIgCgDIgBgCIACAAIAAgBIgBgDIgBAAIABgCIABgBIACgCIAAgEIABgBIgDgBIAAgBIgBgCIgBAAIABACIgBAAQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAQAAAAAAAAQAAAAAAABQAAAAAAAAQAAAAAAABIgBABQAAAAABAAQAAABAAAAQAAAAAAABQgBAAAAABIAAACIABABIgBAAIgCAEgAgCgpIgCABIAAABIABADIACAAIAAgCIAAgCQABgBAAAAQAAgBAAAAQAAAAAAgBQgBAAAAAAIgBAAQAAAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAABgAgCguIABAAIAAgEIgBAAgAADhiIAAACIACAAIgBgCIgBgBIAAABg");
	this.shape_2.setTransform(128.9,114.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#373535").s().p("AABCqQgIgDgFgIQgEgFgEgNQABgFALgEQAIgEAFABQAMACAHAKQAHAKgFALQgEAKgLAAIgKgCgAgKCUIABAAIAAABIgBABIAAABIAAABIABAAIABABIAAAAIACABIABABIAAAAIADAAIABgBIgBgBIgBgBIgBAAIgBgBIADAAIAAAAIABAAIAAgBIABgBQAAAAAAAAQAAAAAAAAQAAAAAAgBQAAAAAAAAIgBgBIABAAIAAAAQAAAAAAAAQAAAAAAAAQAAAAAAAAQAAgBAAAAIgBAAIABAAIAAgBIgBAAIABgCIAAAAIAAgBIAAAAIAAAAIAAgBIgBAAIAAAAIgCgBIABAAIAAgCIgBgBIgCAAIABACIgCgBIgBABIgBAAIAAAAIACACIgBAAIgBABIgBABIAAACIAAAAIAAABQgBAAAAABQAAAAAAAAQAAAAAAAAQABAAAAAAIgBAAgAgHCVIAAAAIABgBIgBgBIgBAAIACgBQAAAAABAAQAAAAAAAAQgBAAAAgBQAAAAgBAAIgBAAIABgBIABABIACAAIABgBIAAgCIAAAAIAAgBIABAAIAAABIAAAAQABAAgBAAIAAABIAAABIgBACIgCgBIgBABQAAABAAAAQAAAAAAAAQAAAAABAAQAAAAAAAAIABAAIgBAAIACgBIAAAAIABABIgBAAIAAAAQAAAAAAABQAAAAAAAAQAAAAAAAAQAAAAAAAAIABAAIgBABIgBAAIAAAAIgBAAIAAAAIgBACgAgFCUIABAAIgBAAgAgkB1QgHgBgGgHQgGgHgBgNIAAgVQACgZAIgjIAOg7QANg/AJgeQAEgMADgEQADgHAJgCQAKgDAIADQAJADADAJIgCAMIgDALIACAZIABA1IABAgQAAAQACANQAHAlABAQQAAAIAFAPQAEAPAAAGIAAACQgSANgLgIQgCgBgDgJQgCgIAAgGQABgMgFgRQgIAEgPAGQgHAEgDAAIgBAKIgBAQQAAAJgEAFQgFAHgHAAIgCAAgAgpBLIAAADIACAAQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAgBAAIgBgBIAAAAgAgnBKIgBgCIACAAIAAgBQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAABAAIAAgDIABgCIgBAAIABgBIACgDIABgDIgBgBIACgCIAAgEIACgCIABgEIABgFIgDgBIAAAAIABgDIgBgBIABgBIACgDIgBgDIgBAAIAAgCIACgBQABAAAAgBQAAAAAAgBQAAAAAAgBQgBgBgBAAIgBgBIAAAAIABgBIABACIACAAIABAAQAAAAAAAAQABgBAAAAQAAAAAAgBQAAAAAAgBIABgDQACgDgBgCIAAgBIgBAAIAAgBIAAgBIAEgGQAAAAAAAAQABAAAAAAQAAAAgBgBQAAAAAAAAQgBAAAAgBQAAAAgBAAQAAAAgBAAQgBABAAAAIAAgBIAAgBIAAgCIgCgCIgBAAQgBABAAAAQAAABAAAAQAAABAAAAQAAABAAAAIAAABIABACIgDACQAAAAgBAAQAAABAAAAQAAAAAAABQAAAAAAABIACACIAAABIgDAFIAAAGIgBAAIABADIgBACQAAABAAAAQgBABABAAQAAAAAAAAQAAABABAAIgBAAQgBAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIgDAEIABACIABABIgBAAIgCADQgBABAAAAQAAABAAAAQAAABAAAAQAAAAAAAAQABABAAAAQABABAAAAQAAAAABgBQAAAAAAAAIACgDIACgBIgBADIgDAEQgBABAAAAQgBAAAAABQAAAAAAABQAAABAAAAIABADIAAAAIAAgBIgCgBQAAABAAAAQgBABABAAQAAAAAAAAQAAABABAAQAAAAAAABQABAAAAAAQAAABAAAAQAAABAAAAIgCAAIAAAAIABACIAAABIgBACIgCAAIgBACIAAADIgBABIgBAAIACACIAAAAIABADIABAAgAABhBIgBAdQgIAkgCAeQAUAAAEgMQACgFgBgZIAAgoQAAgZgGgOQgEADgEAXgAgZAVIgBACIgBACQAAAAAAABQgBAAAAABQABAAAAAAQAAABABAAIABAAQAAAAgBgBQAAAAAAAAQAAAAAAgBQABAAAAAAIACgBIAAgBIgBgCIgBgBIAAAAgAgoBHIAAABIAAgBg");
	this.shape_3.setTransform(118.9,118.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#373535").s().p("AAACRQgJgEgEgJQgDgHADgSQACgXAAgEIgBh2IABgeQABgTgDgKQABABAAAAQAAABgBAAQAAAAAAgBQAAAAgBgBQAAAAAAgBQgBgBAAAAQAAAAABgBQAAAAAAAAQgHgDgWAEQgVAEgJgIQgFgFgBgJQAAgJAEgGQAFgHAOAEQAUAFAEgBQAJgBAQgGQAHgEAHAAIARAAIAbgFQAPgCAJAMQAKAQgMAFQgHADgTABQgSAAgCABQgHADgBANQgBANABAzQAAAnAEBTIAEAfQABAUgKAEQgDACgEAAQgFAAgGgDgAAFBNIABAAIgBgEIgCAAgAAFBHIgCgDIACAAIAAgCQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAgBIAAgEIAAgDIgBAAIABgBIABgFIAAgFIgBgBIABgCIgBgGIABgEIAAgGQABgEgBgDIgDAAIAAgEQAAAAgBgBQAAAAAAAAQAAgBAAAAQAAAAAAAAIABgBIABgFQAAAAAAgBQAAAAAAgBQAAAAgBgBQAAAAgBgBIgBAAQAAAAAAAAQAAgBAAAAQAAgBAAgBQABAAAAAAQACgDgDgCIgBAAIAAABIAAADIAAABQAAABAAAAQAAABAAAAQAAABAAAAQAAAAAAAAIAAAAQAAACAAAEIgBAGIABADIAAAAIAAABIgBAFQAAABAAAAQAAABAAAAQAAABAAAAQABABAAAAIAAAAIADgHIAAAFIgCAHQgBADABADIABACIgCAAIABADQABABAAAAQABAAAAAAQAAABAAAAQAAABAAAAIgCABIABABIABADIAAAAIgBAEIgBAAIAAADIAAAGIgBABIADABIAAABIACADgAAEgDIAAACIAAABQAAABgBAAQAAABAAAAQABAAAAABQAAAAABAAIABAAQAAAAgBAAQAAAAAAgBQAAAAAAAAQABgBAAAAIABgBIAAgBIgBgDgAACgFQAAAAABABQAAAAABAAQAAAAAAgBQABAAAAgBIABgIQABgEgCgDIgCgCIABgCQABgGACgDQAAAAABgBQAAAAAAgBQAAAAAAAAQAAgBgBAAIgFAAIABgBIAAgCIgBgFIgCAAIAAAFIAAACIAAACQgBACAAAEIgBAEIACAEIAAAAIgBAIIABAIIAAAAIABgCQAAABAAAAQAAABAAAAQAAAAAAABQABAAAAAAg");
	this.shape_4.setTransform(105.4,114);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#373535").s().p("AgmCPQgRgMgCgjQACgpgCgPQgFgkACgkQABgrAKgeQALgiAggIQAdgIAbAWIABABIAGA/QABAtgVgBQgTgBgDgNIABgaQAEg2gUACQgSACgCAsQAAAXACAkIgDAeQAAARACAPQABAKgBAVQABATAJAKQASAVALgkIAJgzIADgLQACgEAFgCQAHgCAHAFQAHAFABAGQACALgIAXQgKAcgBAHQgBAPgEAFQgDAEgPAHQgTAIgJABIgHABQgNAAgLgIgAgpBcIACAAIgBgCIgCAAgAgsBPQAAAAAAAAQgBABABAAQAAAAAAABQAAAAAAABIAAABIgBABIADABIAAAAIABADIABAAIgCgCIACAAIAAgCIAAgBIAAgBIAAgDIAAgDIAAAAIACgEQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAAAAAIgBAAIAAgBIABgCIgBgCIAAgCIABgDIABgEQABgDgBgCQAAgBAAAAQAAAAgBAAQAAAAgBAAQAAAAgBABIAAgBQABAAgBAAQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBAAQAAgBAAAAQAAgBAAAAQgBAAABAAQAAAAAAAAIAAgBIACgEQAAAAAAgBQAAAAAAgBQAAAAAAAAQgBAAAAAAIgCgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQABAAAAAAIABgCQABgBAAgBQABAAgBgBQAAAAAAgBQgBAAgBAAIgBgBIABgCIABACIABABIACgBIABgCIAAgEQACgDgCgDIgBgBIAAgBQABgFACgDQABAAAAAAQABAAAAAAQAAgBAAAAQgBAAAAgBQgBAAAAAAQgBAAAAAAQgBAAAAAAQgBAAgBAAIABAAIAAgCIgCgCIgBAAIgBACIgBACIABABIgCAEQAAAAgBABQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAQAAAAABABQAAAAAAAAQABABAAAAIAAABIgCAGIABAGIABAAIgCABIAAACIAAADIABACIgBABIAAADIgCAFIABACIAAABIgCAEQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAQABAAAAABQABAAAAAAQAAAAABAAQAAgBAAAAIACgDIABgCIAAAEIgCAFQAAABgBAAQAAABAAAAQAAABAAAAQAAABAAAAIABADIAAgBIgCAAQAAAAAAABQAAAAAAAAQAAAAAAABQABAAAAAAQABAAAAAAQAAABABAAQAAAAAAABQAAAAAAABIgCAAQAAAAAAAAQgBABAAAAQAAAAABAAQAAAAAAAAQABAAAAABQAAAAAAAAQABABAAAAQAAAAgBABIABAAIgBACIgBAAIgBADgAgkArIABAAIgBgDIAAAAgAglAeIgBACIAAACQAAAAAAAAQAAABAAAAQAAABABAAQAAAAABABIABAAQAAgBgBAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIACgCIAAgBIgBgCIgBgBIgBABg");
	this.shape_5.setTransform(259.2,72.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#373535").s().p("AgBCoQgKgDgGgIQgDgFgEgNIAAAAQABgFALgEQAJgEADABQAMACAHAKQAIAKgFAKQgFALgLAAIgHgCgAgOCSIAAABIAAABIgBABIABABIABAAIABAAIACADIAEAAIABgBIgBgCIgDAAIAAAAIAAAAIgBgBIAEAAIAAAAIABgCQABAAABAAQABAAAAgBQAAAAAAAAQgBAAgBAAIgBgCIABABIABAAIgBgBIgCgBIACAAIAAAAIgBgBIAAAAIABgBIAAgBIgBAAIAAgBIgBAAIAAgBIgBgBIABABIgBgBIAAgBIgBgBIgBAAIAAABIgBAAIgBAAIgBABIAAAAIAAAAIABABIAAAAIgCACIAAABIAAABIgBAAIAAACQgBAAACABIgBAAQAAAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAgAgLCUIAAgBIgBAAIACgBIgBgBIgBAAIABgBIAAgBIgBgBIABAAIAAABIACAAIABgBIABgCIgBAAIABgBIAAAAIABABIAAAAIAAACIgCABIgCAAIAAABQAAABgBAAQAAAAABAAQAAAAAAAAQAAAAABAAIAAAAQgBgBABAAIACAAIAAABQAAAAgBAAQAAABAAAAQAAAAAAAAQABAAAAAAIAAAAIgBABIgBAAIgBABgAAABqIgDgFIgGgFQgCgBgGgBIgHgCQgQgJgJgeQgDgNgBggQgBgcgFgOQAFgCABgPIABgTQACghAHgUIAHgTQAFgLAGgGQAIgIANgCIAXABQANABAFADQAEADAGAMQANAYAAAUQABAwgCAmQgBAsgKAmQgMAwgWAAQgHAAgHgFgAgQhlQgDASgBAlQgBAcACAYQAAAGAIAYQAGAVgBAIQAJAGAFgIQACgDADgQQAFgUADgpQAAgNgBgWIgCgkQAAgfgIgXQgVAKgFAfgAAiAcIAAADIABAAQABAAAAAAQAAAAAAgBQAAAAAAAAQAAgBAAgBIgBAAIgBAAgAAlAaIgBgDIACAAQAAAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAgBIAAgBIABgBIABgEIAAgBQAAAAAAgBQAAAAAAAAQAAgBAAAAQAAAAAAAAIAAgBIAAAAIADgFQACgEgCgBIAAgBIAAAAIABgBQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAgBIgBgDIACgDIACgGQABgDgBgEIgDgBIAAAAIAAgDQAAgBAAAAQgBAAAAgBQAAAAAAAAQABAAAAgBIAAAAIABgBIABgFQAAAAAAgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIgCAAIACgEQACgEgDgCIgDAAIAAAHQAAABAAAAQAAABABAAQAAABAAAAQAAAAAAAAIgBABQAAAAAAABQAAAAAAAAQAAAAAAABQAAAAAAAAIAAADQAAACgCAEQAAAAAAABQAAAAAAAAQAAABAAAAQAAABABAAIAAAAIgCAFQgBADABACIABABIABgBIACgEIABgCIAAAFQgBAFgCACQgCACABADIABACIgCAAQAAABAAAAQAAAAAAABQAAAAAAAAQABAAAAAAQABAAAAAAQAAABABAAQAAABAAAAQAAABgBAAIgBAAQgBAAAAABQAAAAAAAAQAAAAAAAAQAAABABAAIAAACIABABIgCADIgBAAIgBADIgBAEIgBABIAAABIABACIAAAAIABAEIABAAgAAwgjIAAAFIABAAIgBgFIAAAAIAAAAgAAvgwIAAACIAAADQgBABAAABQAAAAAAABQAAAAABAAQAAABAAAAIABAAQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAgBIACgCQAAAAAAAAQAAAAAAAAQAAAAAAgBQAAAAAAAAIgBgDIgBgBIgBABgAAqhWIAAADIABACIgCAGIgBADQAAACADACIAAABIgCAIIAAAEIABAEQAAABAAAAQAAAAABAAQAAAAAAAAQAAAAAAgBIABgBIABACIADAAIABgJQABgEgBgEIgCgCIABgBQABgHACgDIAAgDQAAAAgBAAQAAAAgBAAQgBAAAAAAQgBAAgBAAIABgDIgCgFIgCAAIgBAFg");
	this.shape_6.setTransform(244.1,75.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#373535").s().p("AAeB/QgBgLAAgtIABgkQABgdgGgEQgEgCgYALIgLAGQgCACgBALQgGApAHAhIADAQQgBAJgKADQgEABgIgCQgHgCgEgDQgJgHgBgSIAAgeIABhIIgBhAIgBggIgDgNQgCgJABgEQACgKANgEQAMgEAIAGQAJAGAAAXIgBAiIABAhQACAZAGABQADABAMgFQANgGAEgCQAGgGABgIIAAgRQACg1gBgTIgDgLQAAgEAIgFQAHgEAHACQAHABAEAGQAFAJgCAbIgCAlIgCBNIACBEIABAVIABATIgDAPQgBAIABAHQgIAHgGAAQgMAAgEgZgAgrgEIgBAGQgBAFABADIACACIgBABQgBAHgBACQgBABAAABQAAAAAAAAQAAABAAAAQAAABAAAAIAFAAIgBAAIAAADIACAFIABAAIABgFIAAgDQAAAAAAAAQABAAgBgBQAAAAAAAAQAAAAgBgBQACgBABgEIABgEIgDgEIAAgBIACgHIAAgDIgBgEQAAAAABAAQAAAAAAAAQAAAAAAAAQAAAAAAgBIAAgDIAAgDQAAAAAAgBQAAAAAAgBQAAAAAAgBQgBAAAAAAIABgBIgBgFQADgEAAgCIgCgDIAAgBQAEgGgCgEIgDAAQgBACgBADIgBACIABgEQAAgFABgCQACgDgBgDIgBgCIACAAQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAgBgBAAQAAgBgBAAQAAAAAAgBQAAAAAAgBQAAAAAAgBIACAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAAAAAgBQgBAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAAAIgBgBIABgDIABAAIABgEIAAgDIAAgCIABgBQAAAAgBAAQAAgBAAAAQAAAAgBAAQAAAAgBAAIAAgBIgBgDIABADIgCAAIAAACIAAABIAAACIAAADIAAAEIAAAAIgCAGQAAABAAAAQgBABAAABQAAAAABABQAAAAAAABIABABIgBACIAAADIABADQAAAAAAAAQAAABAAAAQgBABAAAAQAAABAAAAIgBAGIAAAHIADABIAAADQAAABAAAAQAAAAABABQAAAAAAABQAAAAAAAAIgBABIgCAEQAAABAAABQAAABABAAQAAABAAAAQAAAAABAAIABABQAAAAABAAQAAAAAAABQAAAAAAAAQgBAAAAABIgBACQgDADAEACIABABIAAAAIgBADIgBgDIgBgBIgCABgAgsgPQABABAAAAQAAAAAAAAQAAABAAAAQAAAAAAABIgCABIAAACIABADIACAAIAAgCIAAgDIABgCIgCgCgAgsgTIABAAIAAgFIgBAAgAgohYIAAADIABABIABgBIgBgDIgBAAIAAAAg");
	this.shape_7.setTransform(229.7,72.1);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#373535").s().p("AAHCTQgHgBAAABQgRgCgDgSIACgiQgBg+ABgfQABgOAAgdIAAguQgCgfADgLQAEgRAaADQgDAAgDABQANALgBAbQAAAOgDAcQgCAoABAmIABBDQAAAmgDAbQAAAAAAAAQgBAAAAABQAAAAgBAAQgBAAAAAAIgEAAgAgCgKIgBABQAAAAAAABQAAAAABABQAAAAAAABQAAABABABIABAAIAAgEIAAgCIAAgCQAAAAACgEIABgDIgDgDIADgGIgBgDIAAgDIgBAAIgBABIAAgCIgCAAIgBADIgBADQgBAEABACIACACIgBABIgDAHQAAAAgBAAQAAABAAAAQAAAAAAABQABAAAAAAQAAAAABAAQABABAAAAQABAAAAgBQABAAAAAAgAADhcQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAQAAAAAAABQAAAAAAAAQAAAAAAABQAAAAgBAAIAAAEIAAACQAAABAAAAQgBABAAAAQAAABAAAAQgBABAAAAQAAABAAAAQAAABAAABQAAAAAAAAQAAABAAAAIAAABIAAACQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIAAACIAAADIAAAEQgBAEABACIAAAAIAAAAQAAAAAAABQAAAAAAAAQAAABAAAAQAAAAAAABIAAACIAAABIAAADQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAIAAAAQABAAAAAAQAAABAAAAQAAAAAAAAQAAABgBAAIAAACQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAABIABAAIACAAIAAgFQAAAAAAgBQAAAAAAgBQAAAAAAAAQAAgBgBAAIABAAIAAgEIADgEIgCgDIAAAAIACgEQABAAAAgBQAAAAAAgBQAAAAAAgBQAAAAgBgBIgCAAQAAAAgBABQAAAAAAAAQgBABAAAAQAAABAAABIgBABIAAgDQAAgEADgCQAAAAABgBQAAAAAAgBQAAAAAAgBQAAAAgBgBIAAgBIACAAIgCgDQAAAAAAAAQAAgBgBAAQAAAAAAgBQAAAAAAAAIACAAIAAgCQAAAAgBAAQAAgBAAAAQAAAAAAAAQAAgBAAAAIgBAAIABgDIABAAIABgCIAAgDIABgBIAAgBIgCgBIAAgBIgBgCIgBAAIABACIgBgBIAAABgAgCgpIgCABIAAABIABACIACABIAAgCIAAgCQABgBAAAAQAAgBAAAAQAAgBAAAAQAAAAgBAAIgCAAQABAAAAAAQABAAAAABQAAAAAAAAQgBAAAAABgAgCguIABAAIAAgEIgCAAgAADhiIAAACIACAAIgBgCIgBgBIAAABg");
	this.shape_8.setTransform(211.1,72.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#373535").s().p("AACCqQgIgDgGgIQgEgFgEgNIAAAAQACgFAKgEQAIgEAFABQAMACAHAKQAIAKgFAKQgFALgLAAQgEAAgFgCgAgJCUIAAAAIAAABIAAABIgBABIABABIABAAIAAABIABAAIABABIACABIACAAIABgBIgBgBIgBgBIgBAAIAAAAIgBAAIAAgBIADAAIAAAAIABgBIABAAIAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIAAgBIAAAAIAAgBIgBgBIABAAIAAAAQgBAAABgBIgBAAIABAAIAAgBIAAgBIAAAAIAAgBIgBAAIgBgCIAAgBIgBgBIgBAAIAAABIgDAAIAAABIAAAAIABACIAAAAIgCABIAAACIgBAAIAAACQgBABABAAIAAAAgAgHCVIAAAAIABAAIAAgBIAAgBIgBAAIABgBIgBgBIgBgBIABAAIAAAAIABABIACAAIABgBIAAAAIABgCIgBAAIAAAAIABgBIAAABIABAAIgBAAIAAABIAAABIgBABIAAABIAAgBIgCAAIAAABQgBABABAAIABAAIABgBIABAAIAAABQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAIAAAAIgBABIAAAAIgCAAIABAAIgBAAIgBABgAgECUIABAAIgCAAgAgkB0QgHAAgGgIQgGgHgBgMIABgVQABgZAIgkIAOg6QAOhDAJgaQAEgNACgDQADgHAKgDQAKgCAIADQAJADADAJQAAADgGAUIACAZIACA1IABAfQAAARACAMIAHA2QAAAIAFAPQAEAOAAAHIAAABQgSAOgLgIQgCgCgCgIQgCgHAAgHQAAgKgFgTQgIAEgPAGQgHAEgCgBIgBAKIgBAQQgBAJgDAFQgGAIgHAAIgCgBgAgpBLIABADIABAAQAAAAAAAAQABgBgBAAQAAAAAAAAQAAgBAAAAIgCgBIAAAAgAgnBKIgBgDIACABIABgBIgBgCIABAAIABgDQAAAAAAgBQAAAAAAAAQABAAgBgBQAAAAAAgBIADgDIABgEIgBAAIAAgBIABgBIAAgCIAAgCIACgCIABgEIABgGIgCAAIAAAAIAAgDQAAAAgBAAQAAgBAAAAQAAAAAAAAQAAAAABgBIAAAAIADgDIgBgDIgCgBIACgCQABgBAAAAQAAgBAAAAQAAgBAAAAQgBgBAAAAIgCgBIACgBIABACQAAAAAAABQABAAAAAAQAAAAABAAQAAgBAAAAIACgDIABgDIAAgFIAAgBIAAAAIgBgBIAAgBIAEgGQAAAAAAAAQABAAAAAAQAAAAgBgBQAAAAAAAAQAAAAgBgBQAAAAgBAAQAAAAgBAAQAAABgBAAIAAgBIABgBIgBgDIgCgBIgBAAQgBABAAAAQAAABAAAAQAAABAAAAQAAABABAAIgBABIABACIgDACIgBACIACADIAAABIgCAFIAAAGIAAAAIgBAAIAAADIgBACQAAAAAAABQgBAAAAABQABAAAAAAQAAAAABAAIgBAAIAAAEIgEAEIACACIAAABIAAAAIgDADQAAABgBAAQAAABAAAAQAAAAAAABQAAAAABAAIACABIADgDIABgCIgBAEIgDAEQgBABAAAAQgBABAAAAQAAABAAAAQAAABABAAIABADIgBgBIgCgBQAAABAAAAQAAAAAAABQAAAAAAAAQABABAAAAQAAAAABABQAAAAAAAAQAAABAAAAQAAAAAAAAIgBAAQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAIAAACIAAABIgBACIgBAAIgCACIAAACIgBACIAAAAIACACIABADIAAAAgAgaAiIABAAIAAgDIgBgBgAAChBIgCAdQgHAkgCAeQATAAAFgMQACgFgBgaIAAgoQgBgYgFgOQgFADgDAXgAgaAWIAAADQgBAAAAABQAAAAAAAAQAAABAAAAQAAAAABAAIABAAQAAAAgBAAQAAAAAAAAQAAgBAAAAQABAAAAAAIACgBIAAgBIAAgDIgCAAg");
	this.shape_9.setTransform(201,75.7);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#373535").s().p("AgGCMQgaAFgGgPQgDgFgBggIgDhmIAAAAIgVADQgKgBABgPQACgbAbAEIABhNQABgNABgCQACgFANAAQAEAAAEACIAHADQAIACAFAAIAMgBQA1gCAKAwQAGAegMA5IgLAsQgHAZgLATIgaApIgKALQgEAGgDAAQAAAAgBAAQAAAAgBAAQAAgBAAAAQgBgBAAgBgAgGAkIgBAYQAAARAGAAQACABAMgaQAJgUADgJQAPgvAFg9QAEgcgmAGQgOACgDAGQgCADAAATIAAAjQAaACACAPQgBAVgagCgAgcAXIgBACIABAFIACAAIABgFIABgCIgBgCIADgFIAAgEIgCgDIACgIIgBgYIgFgBIABgDIAAgCIAAAAIgCgBIAAABIABAFIgCAAIgBAZQgBAEACADIABACIAAABIgDAJQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAABQACABADgBgAgZhGQAAAAAAAAQAAABAAAAQAAAAgBABQAAAAAAAAIAAAEIAAAGQgBAGABABIAAAAQgBAAAAABQAAAAgBABQAAABAAAAQAAABAAABIAAAEIABABIgBAAIAAACIAAADIABACIAEAAIAAgCIgBgBIACgBIgCgDQAAAAgBAAQAAgBAAAAQAAAAAAgBQAAAAAAgBIACAAIAAgBQgBgBAAAAQgBAAAAgBQAAAAAAAAQAAgBABAAIgBAAIABgDIABAAIABgNIAAgDIABgCIAAAAIgCgCIAAAAIgBgDIgBAAIABADIgBAAQgBAAAAAAQAAAAAAAAQAAAAAAABQAAAAABAAgAgZhMIACAAIgBgDIgBAAIAAADg");
	this.shape_10.setTransform(186.6,73.1);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#373535").s().p("AgWCQQgRgGgHgQQgEgKgDgWQgEgfAAgqIABhHQADgYgBgMQgFgRgBgJIgBgLQABgFAIgEQALgGAQACQALABAGAIQAGAIAAAGIgEAPQgDAPAAAXIgBAnIgDBSQACBDAWgEQAWgDgCgnQgFgsACgLIAAgBQACgXAAgjIAAg9IgBgWQABgQAGgFQAPgLAGAPQAEALgCAOQgBAMACAVIACAgQgCAxABAYQABAkgEAbIgCAfQgDAOgSAEQgKADgWABIgMACIgFABIgIgCgAgtAhIABAEIABgBIgBgDIgBgBIAAABgAgsAeIgCgEIACAAQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAgBAAAAQgBAAAAAAQAAgBAAAAQAAgBAAAAQAAgBABAAIgBgFIAAgEIAAgBIACgGQABgEgBgBIgBAAIABgDIgBgGQAAgBAAAAQAAgBAAgBQAAAAABAAQAAgBAAAAIABgHIAAgJQgBAAAAAAQAAgBgBAAQAAAAAAAAQAAAAgBABIAAgBIAAgEQAAAAAAgBQgBAAAAgBQAAAAAAAAQABgBAAAAIAAAAIAAgBIACgFQAAgBAAgBQAAgBAAAAQAAgBgBAAQAAgBAAAAIgBAAIABgFQADgEgDgDIgCAAIABgBIABgDIAAAEQABAAAAAAQAAAAABAAQAAAAABAAQAAAAAAAAIACgKQABgFgBgDQAAgBAAAAQAAAAAAgBQAAAAgBAAQAAgBAAAAIABgCQABgHACgDQABgBAAAAQAAgBAAAAQAAgBAAAAQAAgBgBAAIgEAAIAAgBIABgDQAAgBgCgFIgBAAIgBAGIgBADIABACIgDAGIgBAFQAAACADADIAAAAIgDAJIAAAKIgBABIABAEIgBAEQAAABAAAAQAAABAAAAQABABAAAAQAAABAAAAIgBAAQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIAAADIgCAHQAAAAAAABQAAAAAAABQAAAAAAABQAAAAABABIAAABIgCAGQgBADABACIABABIACgBIABgFIACgCIgBAFIgCAIQgCADACAEIAAABIgCABQAAABAAAAQAAABAAAAQABABAAAAQABABAAAAQABAAAAAAQAAAAAAAAQABAAAAABQAAAAAAABIgCABQAAAAAAAAQAAAAAAAAQAAABAAAAQAAAAAAAAIABAEIAAAEIgBAAQAAAAAAABQAAAAgBAAQAAABAAABQAAAAAAABIABAEIgBADIAAABQAAAAAAAAQAAAAAAABQABAAAAAAQABAAAAAAIAAABIACAEIABAAIAAAAgAAvhAIgBAEQAAAAAAABQAAAAAAAAQAAABAAAAQAAAAAAABIABABIAAAAIgCAEIAAACIACAAIAAABIABACIAAAAIABgCIAAgBIgBgBIACgCIAAgCIgBgBIAAgBIABgDIAAgEIABAAIgBgBIABgCIgBgBIABAAIAAgCIACgDIgBgBIgBAAQABgBAAgBQAAAAABgBQAAAAAAgBQAAAAAAgBIgCAAIAAACIgBABIAAgCIABgDQABAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAIgBgBIAAgBIABABIABAAIgBgBIgBgCIABAAIAAgBIgBgBIABgBIABgBIAAgEIAAAAIgBgBIgBgBIAAAAIABABIgBAAIAAABIAAADIAAACIAAAAIgBACIAAACIAAABIAAAAIAAACIAAABIgBABIAAADIgBADIACAAIAAADIgBAAIgBACIABACIABAAIgBACQgBAAAAAAQAAABAAAAQAAAAAAAAQABABAAAAIABAAIgBACIAAgCIgBgBIgBABgAgqg6IAAADIAAADQgBABAAABQAAAAAAABQAAAAAAABQABAAAAABIABAAQAAgBAAAAQAAAAAAgBQAAAAAAgBQAAAAAAAAIACgCQAAAAABgBQAAAAAAAAQAAAAgBgBQAAAAAAAAIgBgEIAAgBIgCABgAAvhDIgBAAIAAABIABABIABAAIAAgCQABAAAAAAQAAAAAAgBQAAAAAAAAQAAAAgBAAIgBAAQAAAAABAAQAAAAAAAAQAAAAAAAAQgBAAAAABg");
	this.shape_11.setTransform(165.1,72.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#373535").s().p("AgkCQQgIAAgFgIQgGgHgBgMIAAgVQACgZAIgkIAOg6QALg7ALgiQAFgNACgDQADgHAKgDQAKgCAIADQAJADADAJQAAADgGAUQAAAFACAUIABA1IABAdQABARACAOIAHA2QAAAIAFAPQAEAOAAAHIAAABQgSAOgLgIQgCgCgCgIQgCgIAAgGQAAgMgFgRQgIAEgPAGQgHAEgCgBIgBAKIgBAQQgBAKgDAEQgGAHgHAAIgCAAgAgpBnIABADIABAAIAAgCIgCgBIAAAAgAgnBmIgBgDIACABIAAgBQAAgBAAAAQAAAAAAgBQAAAAAAAAQABAAAAAAIAAgDIABgDIAAAAIADgDQAAgBAAgBQABAAAAgBQAAAAAAAAQgBgBAAAAIAAAAIAAgBIABgDIAAgCIACgCIABgEIABgGIgDAAIAAAAIABgDIgBgCIABAAIADgDIgBgDIgCgBIACgCQABgBAAAAQAAgBAAAAQAAgBAAAAQgBgBAAAAIgCgBIACgBIABACQAAAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIACgDIABgDIAAgFIAAgBIgBgBIAAgBIAEgHIABgBIgBgBQAAgBgBAAQAAAAgBAAQAAAAgBAAQgBAAAAABIAAgBIABgBIgBgDIgCgBIgBAAIgBAEIAAABIABACQgCABgBADIgBACIACADIAAABIgDAFIAAAGIABAAIgCAAIABADIgBACQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAABAAIgBAAQAAAAgBABQAAAAAAAAQAAABAAAAQAAABAAABQAAAAAAAAQAAABgBAAQAAABAAAAQgBABgBABIACACIAAABIgDADQAAAAgBABQAAAAAAABQAAAAAAAAQAAABAAAAQABABAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIACgDIACgCIgBAEQgCAEgBAAQgBAAAAABQgBAAAAABQAAAAAAABQAAAAAAABIACADIgBgBIgCgBQAAAAAAAAQAAABAAAAQAAAAAAABQABAAAAABQABAAAAAAQAAABAAAAQAAAAAAAAQAAABAAAAIgCAAIAAABQABAAAAABQAAAAAAAAQAAABAAAAQAAAAAAAAIAAABIgBACIgBAAIgCACIAAACIgBACIgBAAIADACIABADgAACglIgCAdQgHAmgCAcQATAAAFgMQACgGgBgbIAAgmQgBgYgFgOQgFADgDAXgAgaAyIgBADQAAAAAAAAQAAABAAAAQAAAAAAAAQABABAAAAIABAAQAAAAAAAAQgBgBAAAAQAAAAABAAQAAAAAAAAIACgBQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAAAAAAAIAAgDIgCAAg");
	this.shape_12.setTransform(151.8,72.9);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#373535").s().p("Ag5BqQgBgEABgJQABgIgBgEIgEgEIgEgEQgCgKALgHQAJgGANACQAMADAAAGQAAAEgDANQgEAaAPAJQAhgFgahAQglhEgCgOQgDgVAEgZQAFgeAMgNQARgRAdADQAcADASARQAFAfgGAdQgHAogcgcQALgMAAgXQAAgYgPgJQgWgNgDAdQgBAIAAAkQAAAbAXAtQAaAxABAaQACAsgxAIIgLABQglAAgKglgAATBHIAAACIAAADIACACQAAAAAAAAQAAABAAAAQAAAAABAAQAAgBAAAAIABAAIAAgIIgBgBQABgDAAgDQAAgBABAAQAAgBAAAAQAAgBAAgBQgBAAAAgBIgEgCIAAgBIABgCIAAgCIgBgEIgBgEIgCgDIgBAAIABgBQAAgBAAAAQAAAAAAgBQAAAAAAAAQgBgBAAAAIgBgDQAAgBAAAAQgBgBAAAAQAAgBAAAAQgBAAAAAAIAAgBIgCgEIAAgGIgDgDIAAAAIAAgFQAAgBAAgBQgBAAAAgBQAAgBAAAAQgBAAAAgBIgDABIAAAFIAAADIgBgFQgBgEAAgDIAAgDIAAAAIAAAAIAAAAQgBAAAAAAQAAgBAAAAQgBAAAAAAQAAAAAAgBIACgBQAAAAAAAAQgBgBAAAAQAAAAgBAAQgBAAAAAAIgEgCIACgCQAAAAAAAAQAAAAAAgBQAAAAAAAAQgBAAAAAAIgCgCIgBAAIgBgDIABgBIgBgDIgCgDIgBgBQAAgBABAAQAAAAAAAAQAAAAAAAAQgBAAAAAAIgCAAIAAgBIgDgCIgBABIADACIgBAAQAAABAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAIABABIAAABIACADIADADIAAABIABAFQABADABABIABAAIABADIACAAIABACIABAEIABAGQABADABADQAAAAAAAAQAAAAAAAAQAAAAABgBQAAAAABAAIAAAAIACADIABACIAAAGQAAAAAAABQABAAAAABQAAAAABAAQAAABABAAIABAAQABAAAAAAQAAAAAAABQAAABAAAAQAAABgBABQgBAEAEABIABAAIAAACIgBgCIgDABIABAEIABAIIABADIADACIAAAGIgCAEIABADIAEgBgAAFAgQABAAAAAAQAAABABAAQAAAAAAAAQAAABAAAAIgBACIAAACIACACIACAAIgBgDIgBgCQABgBAAgBQAAAAgBgBQAAAAAAAAQgBgBgBAAQAAAAgBAAQAAAAAAAAQAAABAAAAQAAAAAAAAgAgVgeIAAACIABABQABAAAAAAQABAAAAgBQAAAAAAAAQAAAAAAAAIgCgCg");
	this.shape_13.setTransform(138.5,73);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#373535").s().p("AgkCxQgIAAgFgIQgGgHgBgMIAAgVQACgZAIgkIAOg8QALg5ALgiQAFgNACgDQADgHAKgDQAKgCAIADQAJADADAJQAAADgGAUQAAAFACAUIABAzIABAfQABARACAOIAHA2QAAAIAFAPQAEAOAAAHIAAABQgSAOgLgIQgCgCgCgIQgCgIAAgGQAAgMgFgRQgIAEgPAGQgHAEgCgBIgBAKIgBAQQgBAKgDAEQgGAHgHAAIgCAAgAgpCIIABADIABAAIAAgCIgCgBIAAAAgAgnCHIgBgDIACABIAAgBQAAgBAAAAQAAAAAAgBQAAAAAAAAQABAAAAAAIAAgDIABgDIAAAAIADgDQAAgBAAgBQABAAAAgBQAAAAAAAAQAAgBgBAAIAAAAIAAgBIABgDIAAgCIACgCIABgEIABgGIgDAAIAAAAIABgDIgBgCIABAAIADgDIgBgDIgCgBIACgCQABgBAAAAQAAgBAAAAQAAgBAAAAQgBgBAAAAIgCgBIACgBIABACQAAAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIACgDIABgDIAAgFIAAgBIgBgBIAAgBIAEgHQAAAAABgBQAAAAAAgBQAAAAAAAAQgBAAAAAAQAAgBgBAAQAAAAgBAAQAAAAgBAAQgBAAAAABIAAgBIABgBIgBgDIgCgBIgBAAIgBAEIAAABIABACQgCABgBADIgBACIACADIAAABIgDAFIAAAGIABAAIgCAAIABADIgBACQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAABAAIgBAAQgBAAAAABQAAAAAAAAQAAABAAAAQAAABAAABQAAAAAAAAQAAABAAAAQgBABAAAAQgBABgBABIACACIAAABIgDADQAAAAgBABQAAAAAAABQAAAAAAAAQAAABAAAAQABABAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIACgDIACgCIgBAEQgCAEgBAAQgBAAAAABQgBAAAAABQAAAAAAABQAAAAAAABIACADIgBgBIgCgBQAAAAAAAAQAAABAAAAQAAAAAAABQABAAAAABQABAAAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIgCAAIAAABQABAAAAABQAAAAAAAAQAAABAAAAQAAAAAAAAIAAABIgBACIgBAAIgCACIAAACIgBACIgBAAIADACIABADIAAAAgAACgEIgCAbQgHAogCAcQATAAAFgMQACgGgBgbIAAgoQgBgWgFgOQgFADgDAXgAgaBTIgBADQAAAAAAAAQAAABAAAAQAAAAAAABQABAAAAAAIABAAQAAAAAAAAQgBgBAAAAQAAAAABAAQAAAAAAAAIACgBQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAAAAAAAIAAgDIgCAAgAAOiCIgRgTIgNgHQgGgEAHgJQAIgJAHADQAFACAIAJIASAPQALAMgFAIQgEAFgGAAQgGAAgHgGgAAMiMIACABQgBABAAAAQgBAAAAABQAAAAAAABQAAAAAAAAIAIABQAAABAAAAQABAAAAABQAAAAABAAQAAAAAAAAIAAgBIABgCIgBABIAAAAIAAAAIAAAAIgBAAIAAABIgBgBIAAAAIgBgBIgEgDIgCAAIAAgCIAAAAIgBABgAAdiFIABAAIAAgBIgBAAIgBAAIAAAAIAAAAIABAAgAAdiJIAAAAIABAAIgBABIABACIADgBIgDgCIAAgBIgBAAIAAgCIgDgBIABACIABAAIAAABIABAAgAAXiKIAAAAIAAgBIAAAAgAAYiLIAAAAIABAAIgBgBIAAABgAAYiMIAAAAIgBAAgAAYiNIAAABIAAAAIAAgBIAAAAIAAAAIAAAAgAAaiNIAAAAIgBgBIAAABIAAAAIAAAAIAAAAgAAViQIAAABIAAABIAAgBIABAAIAAAAIAAAAIAAAAIABgBIAAAAIAAAAIAAgBIgBgBIgBAAIgBAAIACABIAAABIgBgBIAAACIAAgBgAANiPIADgCIAAAAIABAAIAAABIAAAAIABAAIgBAAIABgBIABgBIABAAIAAAAIABAAIABgBIgDAAIgGAAgAAdiKg");
	this.shape_14.setTransform(116.9,69.6);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#373535").s().p("AgeCDQAEgFgCgNIgEgUIgFgvQgEgsgKgmQgFgZgGgTIgDgNIgCgNIgHgOQgHgKABgDQACgFAMgEQAKgEAGAAQAYAAAIAoQAEAWABAoIAHA1IAAAeQABAUAEAIQAGgDAGgsIAHgzQAJgsAMgnQAGgSAIgJQAMgPAMAPQAHAJgFAOQgDAIgIANQgJAUgIAeIgMAxIgOAzQgIAegCAVQgBAGACAPQABANgGAGQgFAFgGAAQgMAAgSgSgAgphEIgBAFIABAFIACABIAAABQgBAFgCABQAAABgBAAQAAAAAAABQAAAAAAAAQABAAAAAAIAFAAIgBACQAAAAAAABQAAAAAAAAQAAABABAAQAAAAABABIACAAIAAgEIAAgBQAAAAAAAAQAAgBAAAAQAAAAAAAAQgBAAAAAAIADgEIAAgDIgDgCQACgEAAgCIgBgCIgBgDIgBAAIgBACIgBgCIgBAAIgCABgAgphVIABACIAAABIABAAIgCAEQAAABAAAAQAAAAAAABQAAAAABAAQAAAAABAAIABAAQAAAAABAAQAAABAAAAQAAAAAAAAQgBAAAAABIgBABQAAABgBABQAAAAABABQAAAAAAAAQABABABAAIADgBIgBgCIAAgCQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAAAAAAAIABAAIgBgEIABgEIgCgCIAAAAIAAAAIABgEQAAAAAAgBQABAAAAgBQgBAAAAAAQAAgBAAAAIgDABIgBADIgBACIAAgDQAAgEABgBQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAgBAAIgBgBIACgBQAAAAAAAAQAAgBAAAAQAAAAgBAAQAAAAgBAAQAAAAgBAAQAAAAAAgBQgBAAAAAAQAAAAAAgBIACgBIAAgBIgCgBIgBAAIABgCIABgBIAAgCQAAgBAAAAQAAAAAAgBQAAAAAAAAQgBgBAAAAIAAgBIABgBIgDAAIAAAAIgCgCIgBAAIACACIgBAAQgBABAAAAQAAAAAAAAQAAAAAAABQAAAAABAAQABAAgBAAIAAABIABADQAAAAAAABQAAAAAAAAQAAAAAAABQAAAAABAAIAAAAIAAAAIgBAEQAAABAAAAQAAABAAAAQAAABAAAAQAAAAABAAIABABIgBAAIAAABIABACIABACIgBACIAAAEQAAABAAABQAAAAABABQAAABAAAAQAAAAABABIACgBgAgrhLQABAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAABIgCABIABABIABACIABgBIABgBIAAgCQAAgBAAAAQAAAAAAgBQAAAAgBAAQAAAAgBAAIgBAAgAgzh6QAAABAAAAQAAAAABAAQAAABAAAAQAAAAABAAIABgBIgBgBIgBAAIgBAAg");
	this.shape_15.setTransform(103,73);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#373535").s().p("AglCPQgSgMgBgjQABgpgCgPQgFgkACgkQABgrAKgeQALgiAggIQAegIAbAWIAAABIAHA/QABAtgWgBQgSgBgDgNIABgaQACg2gTACQgSACgBAsQgBAXACAkIgCAeQgBARACAPQABAKAAAVQABATAJAKQARAVALgkIAJgzIADgLQACgEAFgCQAHgCAHAFQAHAFABAGQADALgJAXQgKAcAAAHQgCAPgEAFQgDAEgOAHQgTAIgKABIgHABQgNAAgKgIgAgoBcIABAAIgBgCIgBAAgAgsBPQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAABABIgBABIgBABIADABIAAAAIACADIAAAAIgBgCIABAAQAAgBABAAQAAAAAAAAQAAgBAAAAQgBAAAAAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAgBABAAIgBgDIABgBQAAgBAAAAQAAAAAAAAQAAgBAAAAQgBAAAAAAIACgEQAAgBABgBQAAAAAAgBQAAAAAAgBQgBAAAAAAIAAAAIAAgBIAAgCIAAgCIAAgCIABgDIABgEIgBgFQAAgBAAAAQAAAAAAAAQgBAAAAAAQgBAAAAABIAAgBQABAAgBAAQAAgBAAAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQgBgBAAAAQAAgBAAAAQAAAAAAAAQAAAAAAAAIABgBIACgEQAAAAAAgBQgBAAAAgBQAAAAAAAAQAAAAgBAAIgBgBQgBAAAAgBQAAAAAAAAQABgBAAAAQABgBABAAQAAgBAAgBQABAAAAgBQgBAAAAgBQgBAAgBAAIgBgBIABgCQAAAAAAABQAAAAABAAQAAABAAAAQAAAAABAAIACAAIABgCIABgEQABgEgBgCIgCgBIABgBQABgFACgDQAAAAABAAQAAAAAAAAQAAgBAAAAQAAAAgBgBQAAAAgBAAQAAAAgBAAQgBAAAAAAQgBAAAAAAIAAAAIABgCIgCgCIgCAAIgBACIAAACIABABIgDAEIgBADQAAABAAAAQAAAAABABQAAAAABAAQAAABABAAIAAABIgDAGIABAGIgBABIABACIgBADIABACIgBABIABADIgDAFIACACIAAABIgCAEQgBAAAAABQAAAAAAAAQAAABAAAAQAAABABAAQAAAAAAABQABAAAAAAQABAAAAAAQAAgBABAAIABgDIABgCIAAAEIgCAFQgBABAAAAQAAABAAAAQAAABAAAAQAAABAAAAIACADIAAAAIgBgBIgCAAQAAAAAAAAQAAABAAAAQAAAAABAAQAAABABAAQAAAAAAAAQABABAAAAQAAAAAAABQAAAAAAABIgBAAQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAQAAAAAAABQABAAAAAAQAAABAAAAQAAAAAAABIAAAAIgBACIgBAAIgBADgAgkAeIgBACIAAACQgBAAAAAAQAAABAAAAQAAABABAAQAAAAABABIABAAQAAgBgBAAQAAAAAAgBQAAAAAAAAQAAAAABAAIABgCIAAgBIgBgCIgBgBIAAABg");
	this.shape_16.setTransform(80.2,72.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#373535").s().p("AgBCoQgKgDgGgIQgDgEgFgOIAAAAQACgFAKgEQAKgEADABQAMACAHAKQAIAKgFAKQgFALgLAAIgHgCgAgOCSIAAABIAAABIgBABIABABIABAAIABAAIACADIADAAQABAAAAAAQAAAAAAAAQABAAAAgBQAAAAAAAAIgCgCIgCAAIgBgBIADAAIAAAAIABgBIABgBQAFgBgEAAIgBgBIAAgBIABABIABAAIgBgBIgCgBIACAAIAAAAIgBgBIABgBIAAgBIgBAAIAAgBIgBAAIAAgBIgBAAIAAgCIgBgBIgBAAIAAABIgBAAIgBAAIgBABIAAAAIAAAAIABABIAAAAIgCACIAAABIAAABIgBAAIAAACQgBAAACABIgBAAQAAAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAgAgLCUIAAgBIgBAAIACgBIgBgBIgBAAQAAAAAAAAQgBAAABgBQAAAAAAAAQABAAAAAAIAAgBIgCgBIABAAIABAAIAAABIACAAIABgBIAAAAIABgCIgBAAIABgBIAAAAIAAABIABAAIgBAAIAAABIABABIgBAAIgBABIgCAAIAAABQAAABgBAAQAAAAABAAQAAAAAAAAQAAAAABAAIAAAAIAAgBIACAAIAAABQAAAAgBAAQAAABAAAAQAAAAAAAAQABAAAAAAIAAAAIgBABIgBAAIgBABgAgJCSIABAAIgBAAgAAABqIgEgFIgFgFQgCgBgGgBIgHgCQgSgKgHgdQgDgNgBggQgBgcgFgOQAFgCABgPIABgTQACghAHgUQAIgbAKgJQAIgIANgCIAXABQANABAFADQAEADAGAMQANAXAAAVQABAwgCAmQgBArgKAnQgMAwgWAAQgHAAgHgFgAgRhlQgDASAAAlQgCAgADAUQAAAGAIAYQAGAVgBAIQAJAGAFgIQACgDADgQQAFgXACgmQABgNgCgWIgBgkQAAgfgIgXQgVAKgGAfgAAiAcIAAADIABAAIABgDIgCAAIAAAAgAAlAaIgBgDIACAAIAAgCQAAAAAAAAQAAAAAAgBQAAAAAAAAQABAAAAgBIABgEIAAgEIAAAAIADgFQABgEgBgBIAAgBIAAAAIABgBQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAgBIgBgDIACgDIACgGIAAgHIgDgBIAAgDQAAgBAAAAQgBAAAAgBQAAAAAAAAQABAAAAgBIAAAAIAAgBIACgFQAAAAAAgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIgCAAQAAAAAAAAQAAgBAAAAQAAgBABAAQAAgBABgBQACgEgDgCIgDAAIAAAEIAAADQAAABAAAAQAAABAAAAQAAAAAAABQABAAAAAAIgBABQgBABABAEQAAACgDAEIACADIAAAAIgCAFQgBADABACIABABIABgBIACgEIABgCIAAAFQgBAFgCACQgCACABADIABACIgCAAQAAABAAAAQAAAAAAABQAAAAAAAAQABAAAAAAQABAAAAAAQAAABABAAQAAABAAAAQAAABgBAAIgCAAIAAACIABACIABABIgCADIgBAAQAAABAAAAQgBAAAAAAQAAABAAAAQAAABAAAAIgBAEIgBABIAAABIABACIAAAAIABACIAAACIABAAgAAvgwIAAACIAAADQgBABAAABQAAAAAAABQAAAAABAAQAAABAAAAIABAAQAAAAAAgBQgBAAAAAAQAAgBAAAAQABAAAAgBIACgCQAAAAAAAAQAAAAAAAAQAAAAAAgBQAAAAAAAAIgBgDIgBgBIgBABgAAqhWIAAADIABACIgCAGIgBADQAAACADACIAAABQgCAEAAAEIABAIQAAABAAAAQAAAAAAAAQAAAAABAAQAAAAAAgBIABgBIABACIADAAIABgJQABgEgBgEIgCgCIABgBIACgKQABAAAAgBQAAAAAAgBQAAAAAAAAQAAAAgBgBQAAAAAAAAQgBAAAAAAQgBAAAAAAQgBAAgBAAIAAgBIABgCIgCgFIgCAAQgBADAAACg");
	this.shape_17.setTransform(65.2,75.2);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#373535").s().p("AAeB/QgBgKAAguIABgkQABgdgGgEQgEgCgYALIgLAGQgCACgBALQgGApAHAhIADAQQgBAJgKADQgEABgIgCQgHgCgEgDQgJgHgBgSIAAgeQgBgPABgWIABgjIgChgQgFgSABgIQACgKAMgEQANgEAIAGQAJAGAAAXIgBAiIABAhQACAZAGABQADABAMgFQANgGADgCQAGgGACgIIAAgRQACg1gBgTIgDgLQAAgEAIgFQAHgEAHACQAHABAEAGQAFAJgCAbIgCAlIgCBNIACBEIABAVIAAATIgCAPQgBAIABAHQgJAHgGAAQgLAAgEgZgAgrgEIgBAGIAAAIIACACIgBABQgBAHgBACQgBABAAABQAAAAAAAAQAAABAAAAQAAABAAAAIAFAAIgBAAIAAADIABAFIACAAIABgFIAAgDIgBgCQACgBABgEIABgEIgDgEIAAgBIACgHIAAgDIgBgEQAAAAABAAQAAAAAAAAQAAAAAAAAQAAAAAAgBIAAgDIAAgDQAAAAAAgBQAAAAAAgBQAAAAAAgBQgBAAAAAAIABgBIgBgFIADgGIgCgDIAAgBQAEgGgDgEIgCAAIgCAFIgBACIABgEQAAgFABgCQACgDgBgDIgBgCIACAAQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAgBgBAAQAAgBgBAAQAAAAAAgBQAAAAAAgBQAAAAAAgBIACAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAAAAAgBQgBAAAAAAQAAAAgBgBQAAAAAAAAQAAgBABAAIgBgBIABgDIABAAIABgEIAAgDIAAgCIABgBQAAAAgBAAQAAgBAAAAQAAAAgBAAQAAAAgBAAIAAgBIgBgDIABADIgCAAIAAACIAAABIgBACIABADIAAAEIAAAAIgCAGQAAABAAAAQgBABAAABQAAAAABABQAAAAAAABIABABIgBACIAAADIABADQAAAAAAAAQAAABAAAAQAAABgBAAQAAABAAAAIgBAGIAAAHIADABIAAAAIAAADQAAABAAAAQABAAAAABQAAAAAAABQAAAAAAAAIgBABIgCAEQAAABAAABQAAABABAAQAAABAAAAQAAAAABAAIABABQAAAAABAAQAAAAAAABQAAAAAAAAQgBAAAAABIgBACQgDADAEACIABABIAAAAIgBADIgBgDIgBgBIgCABgAgsgPQABABAAAAQAAAAAAAAQAAABAAAAQAAAAAAABIgCABIABAFIACAAIAAgCIAAgDIABgCIgCgCIgBAAg");
	this.shape_18.setTransform(50.8,72.1);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#373535").s().p("AAHCTQgHgBAAABQgRgCgDgSIACgiQgBg+ABgfQABgOAAgdIAAguQgCgfADgLQAEgRAaADQgDAAgDABQANALgBAbQAAAOgDAcQgCAtABAhIABBDQAAAmgDAbQAAAAAAAAQgBAAAAABQAAAAgBAAQgBAAAAAAIgEAAgAgCgKIgBABIABAFIACAAIAAgEIAAgCIAAgCQAAAAACgEIABgDIgDgDQACgEAAgCIAAgDIAAgDIgBAAIgBABIAAgCIgCAAIgBADIgBADIAAAGIACACIgBABIgDAHQgBAAAAAAQAAABAAAAQAAAAAAABQAAAAABAAQAAAAABAAQABABAAAAQABAAAAgBQABAAAAAAgAADhcQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAAAIABABIgBABIAAAGIgCAEIAAAEIAAABIAAACQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIAAACIAAADIAAAEQgBAEABACIAAAAIAAADIAAACIAAABIAAADQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAIAAAAQABAAAAAAQAAABAAAAQAAAAAAAAQAAABgBAAIAAACQAAAAAAABQAAAAAAABQAAAAAAABQAAAAAAABQAAAAABAAQAAAAAAAAQABAAAAAAQABAAAAAAIgBgDIABgCQAAAAAAgBQAAAAAAgBQAAAAAAAAQAAgBgBAAIABAAIAAgEIADgEIgCgDIAAAAIACgEQABAAAAgBQAAAAAAgBQAAAAAAgBQAAAAgBgBIgCAAQAAAAgBABQAAAAAAAAQgBABAAAAQAAABAAABIgBABIAAgDQAAgEADgCQAAAAABgBQAAAAAAgBQAAAAAAgBQAAAAgBgBIAAgBIACAAIgCgDIgCgCIADAAIAAgCQAAAAgBAAQAAgBAAAAQAAAAAAAAQAAgBAAAAIgBAAIABgDIABAAIABgCIAAgDIABgBIAAgBIgCgBIAAgBIgBgCIgBAAIABACIgBgBIAAABgAgCgpIgCABIAAABIABACIABABIABgCIAAgCQABgBAAAAQAAgBAAAAQAAgBAAAAQgBAAgBAAIgBAAQABAAAAAAQABAAAAABQAAAAAAAAQgBAAAAABgAAChiIABACIACAAIgBgCIgBgBIgBABg");
	this.shape_19.setTransform(32.2,72.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#373535").s().p("AACCqQgIgDgGgIQgEgFgEgNIAAAAQACgFAKgEQAIgEAFABQAMACAHAKQAIAKgFAKQgFALgLAAQgEAAgFgCgAgJCUIAAAAIAAABIgBABIAAABIABABIABAAIAAABIABAAIABABIABABIABAAIACAAIABgBIgBgBIgBgBIgBAAIAAAAIgBAAIAAgBIADAAIAAAAIABgBIABAAIAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIAAgBIAAAAIAAgBIgBgBIABAAIAAAAQgBAAABgBIgBAAIABAAIAAgBIAAAAIAAgBIAAAAIAAgBIgBAAIgBgCIAAgBIgBgBIgBAAIAAABIgDAAIAAABIAAAAIABACIgCABIAAACIgBAAIAAACQgBABABAAIAAAAQgBAAAAAAQAAAAAAAAQAAAAAAABQAAAAABAAgAgHCVIAAAAIABAAIAAgBIAAgBIgBAAIABgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQgBAAAAAAIgBgBIABAAIAAAAIABABIACAAIAAgBIABAAIABgCIgBAAIAAAAIABgBIAAABIABAAIgBAAIAAABIAAABIgBABIAAABIAAgBIgCAAIAAABQgBABABAAIABAAIABgBIABAAIAAABQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAIAAAAIgBABIgBAAIAAAAIgBAAIABAAIgBAAIgBABgAgECUIAAAAIgBAAgAgkB0QgIAAgFgIQgGgHgBgMIABgVQABgZAIgkIAOg6QAOhDAIgaQAFgNACgDQADgHAKgDQAKgCAIADQAJADADAJQAAADgGAUIACAZIACA1IAAAfQABAQACANIAHA2QAAAIAFAPQAEAOAAAHIAAABQgSAOgLgIQgCgCgCgIQgCgHAAgHQAAgKgFgTQgIAEgPAGQgHAEgCgBIgBAKIgBAQQgBAKgDAEQgGAIgHAAIgCgBgAgpBLIABADIABAAIAAgCIgCgBIAAAAgAgnBKIgBgDIACABIABgBQgBAAAAgBQAAAAAAAAQAAgBAAAAQABAAAAAAIABgDIAAgDIAAAAIADgDQAAgBAAAAQAAgBAAAAQABgBgBAAQAAAAAAgBIAAAAIAAgBIABgBIAAgCIAAgCIACgCQAAAAAAgBQABAAAAgBQAAAAAAgBQAAAAAAgBIABgGIgCAAIAAgFIAAAAIADgDIgBgDIgCgBIACgCQABgBAAAAQAAgBAAAAQAAgBAAAAQgBgBAAAAIgCgBIACgBIABACQAAAAAAABQABAAAAAAQAAAAABAAQAAgBAAAAIACgDIABgDIAAgFIAAgBIAAAAIgBgBIAAgBIAEgGQAAAAAAAAQABAAAAAAQAAAAgBgBQAAAAAAAAQAAAAgBgBQAAAAgBAAQAAAAgBAAQAAABgBAAIAAgBIABgBIgBgDIgCgBIgBAAIgBAEIAAABIABACIgDACQAAAAgBAAQAAABAAAAQAAAAAAABQAAAAAAAAIACADIAAABIgCAFIAAAGIgBAAIAAADIgBACQAAAAAAABQgBAAAAABQABAAAAAAQAAAAABAAIgBAAQgBABAAAAQAAAAAAABQAAAAAAABQAAAAAAABQAAABgDADIACACIAAABIAAAAIgDADQAAABgBAAQAAABAAAAQAAAAAAABQAAAAABAAIABABIABAAIACgDIACgCIgBAEQgCAEgBAAQgBABAAAAQgBABAAAAQAAABAAAAQAAABABAAIABADIgBgBIgCgBQAAABAAAAQAAAAAAAAQAAABAAAAQABAAAAABQAAAAABABQAAAAAAAAQAAABAAAAQAAAAAAAAIgBAAQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAABAAIAAACIAAABIgBACIgBAAIgCACIAAACIgBACIAAAAIACACIABADIAAAAgAgaAiIABAAIAAgDIgBgBgAAChBIgCAdQgHAmgCAcQATAAAFgMQACgGgBgZIAAgoQgBgYgFgOQgFADgDAXgAgaAWIgBADQAAAAAAABQgBAAABAAQAAABAAAAQAAAAABAAIABAAQAAAAgBAAQAAAAAAAAQAAgBAAAAQABAAAAAAIACgBIAAgBIAAgDIgCAAg");
	this.shape_20.setTransform(22.1,75.7);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#373535").s().p("AgGCMQgaAFgGgPQgDgFgBggIgDhmIAAAAIgVADQgKgBABgPQACgbAbAEIABhNQABgNABgCQACgFANAAQAEAAAEACIAHADQAIACAFAAIAMgBQA1gCAJAwQAHAegMA5IgLAsQgHAZgLATIgbApIgJALQgEAGgDAAQAAAAgBAAQAAAAgBAAQAAgBAAAAQgBgBAAgBgAgGAkIgBAYQAAARAGAAQACABAMgaQAKgWABgHQARgwAEg8QAFgcgnAGQgOACgDAGQgCADAAATIAAAjQAaACACAPQgBAVgagCgAgcAXIgBACIABAFIACAAIABgFIABgCIgCgCIADgCIABgDIAAgEIgCgDIACgIIgBgZIAAABIgFgBIABgDIAAgCIgBgBIgBAAIABAGIgCAAIgBAZQgBAFACACIABACIAAABIgDAJQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAABQACABADgBgAgahGIABABIgBABIAAAEIAAAGQgBAGABABIAAAAQgBAAAAABQAAAAAAABQgBABAAAAQAAABAAABIAAAEIABABIgBAAIAAACIAAADIABACIAEAAIAAgCIgBgBIACgBIgCgDQAAAAgBAAQAAgBAAAAQAAAAAAgBQAAAAAAgBIACAAIAAgBQgBgBAAAAQgBAAAAgBQAAAAAAAAQAAgBABAAIgBAAIABgDIABAAQABgBAAgFIAAgKIABgCIAAAAIgCgCIAAAAIgBgDIgBAAIABADIgCAAQAAAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAgAgZhMIACAAIgBgDIgCAAg");
	this.shape_21.setTransform(7.7,73.1);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#373535").s().p("AAeB/QgBgKAAguIABgkQABgdgGgEQgDgCgMAEIgNAHIgLAFQgCADgBAKQgGApAGAiQAEAOgBACQAAAJgKADQgEABgIgCQgHgCgEgDQgJgHgBgSIgBgeIAAglIACgjQAAgggCggIAAggQgGgTACgHQACgKAMgEQANgEAIAGQAJAGAAAXIgBAiQABAFAAAcQACAZAGABQADABAMgFIAQgIQAGgGACgJIAAgRQACg0gBgTIgDgLQAAgEAIgFQAHgEAHACQAHABAEAGQAFAJgCAbIgCAlIgCBNIACBEIABAUIAAAUIgCAPQgBAIABAHQgIAGgGAAQgMAAgEgYgAgrgEIgBAGIAAAIIACACIgBABQgBAHgCACQAAABAAAAQAAABAAAAQAAABAAAAQAAABAAAAIAFAAIgBAAIAAADIABAFIACAAIABgFIAAgDIgBgCQACgBABgEIABgEIgDgEIAAgBIACgHIAAgDIgBgEQAAAAABAAQAAAAAAAAQAAAAAAAAQAAAAAAgBIAAgDIAAgDQAAgBAAAAQAAAAAAgBQAAAAAAgBQgBAAAAgBIABAAIgBgFIADgGIgCgDIAAgBIAAAAIACgFQABgDgCgCIgCAAIgDAHIAAgFIACgHQACgCgBgDIgBgDIAAABIACAAQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAgBgBgBQAAAAAAAAQgBAAAAgBQAAAAAAAAQAAgBAAgBIACAAIAAgCQgBAAAAAAQAAgBAAAAQAAAAAAAAQAAgBAAAAIgBgBIABgDIABgBIABgDIAAgDIAAgCIABgBIgDgCIgBgDIgBAAIACADQgBAAAAgBQAAAAAAAAQgBAAAAAAQAAABAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAQAAABAAAAQAAAAAAAAQAAABAAAAQAAAAAAABQAAAAgBAAQAAABABAAQAAABAAAAQAAABAAAAQAAABAAAAIAAAEIAAAAIgCAFIAAAFIABABIgBADIABAGQAAAAAAABQAAAAAAABQAAAAgBABQAAAAAAAAIgBAGIAAAHIADABIAAADQAAABABAAQAAABAAAAQAAAAAAABQAAAAgBAAIAAABIgCAEQAAABAAABQAAAAABABQAAAAAAABQAAAAABAAIABAAQAAABABAAQAAAAAAABQAAAAAAAAQgBABAAAAIgBACQgDACAEADIABABIAAAAIgBADIgBgDIgBgBIgCABgAgsgPQABABAAAAQAAAAAAABQAAAAAAAAQAAABAAAAIgCABIAAACIABADQAAAAABABQAAAAAAAAQAAAAABAAQAAgBAAAAIAAgCIAAgDIABgCIgCgCIgBAAgAgohVIACAAIgBgDIgCAAg");
	this.shape_22.setTransform(248.7,25.7);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#373535").s().p("AhCCIQgFgKAAgRQAAgDADgHIACgKQAAgFgBgJIgCgOQgCgYADglIADg/QgDggADgUQAEgmAYAJQALAEAFAQQADAJADARQAMA1AEARQADAOALAXIAGAcQAFARAIAFQAEgfABhMIABgvIgDgXQgCgQACgFQAEgIAKACQAJABAFAHQAFAGgCAQIgBAZIgCBpIAABEIAEAaQAFASgFAHQgFAJgNABQgNABgHgHQgJgLgKgjIgZhMQgQgtgEghQADAxAAAvQAAAWAFAqQACAUgDAFIgJAKIgJALQgFADgFAAQgHAAgFgLgAgxBgIABADIABgBIgBgCIgBgBIAAABgAgwBdIgBgDIABAAQAAAAAAAAQABAAAAgBQAAAAgBAAQAAAAAAAAQAAAAAAgBQgBAAAAAAQAAAAAAAAQAAgBABAAIAAgBIAAgEIgBgDIAAgBIABAAIABgFQAAgBABgBQAAAAAAgBQAAAAAAgBQgBAAAAgBIgBgBIAAAAIAAgCIAAgGIAAgDIABgGIAAgHIgCAAIAAgEIAAgBQgBgBAAAAQAAAAAAAAQAAAAABAAQAAAAAAAAIAAgBIABgBQAAAAAAgBQABAAAAgBQAAAAAAgBQAAAAAAgBQABAAAAgBQAAgBAAAAQAAgBgBAAQAAAAgBgBIgBAAQAAAAAAAAQAAgBAAAAQAAgBABAAQAAgBABgBIAAgDQAAAAAAgBQAAAAAAAAQAAAAAAgBQgBAAAAAAIgBgBIABgDIAAADQABABAAAAQABAAAAAAQAAAAABAAQAAAAAAgBIAAgEIABgEQAAgGgBgBIgCgCIABAAQABgGACgCQAAgBAAAAQAAgBAAAAQAAgBAAAAQAAAAAAAAIgFgBIABAAIAAgCQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBgBIAAgCIgCAAIgBACIAAACIgBADIABACQgCABgBAEIgBAEQAAABABAAQAAAAAAAAQABAAAAAAQABAAABABIAAAAIgCAIIABAEIABAEIgBABIAAADIAAADIABADIgBAAQgBABAAAAQAAABAAAAQAAABAAAAQAAABABABIgEAFQAAAAAAABQAAAAABABQAAAAAAABQABAAAAABIAAABIgBACIgBAAIAAABIAAAAIgBABIgBADIABADIACAAIABgBIACgCIAAgCIABgCIAAAFQAAAEgCADQgCACABADIACACIgDAAQAAABAAAAQAAAAAAABQABAAAAAAQABAAABABIABADIgCABIABABIABADIAAAAIgBADIAAABQgBAAAAAAQAAAAAAABQAAAAAAABQgBAAAAABIABAEIgBABIAAACIADABIACADIAAAAgAguAVIAAADQAAABAAAAQAAABAAAAQAAABAAAAQABABAAAAIABAAQAAgBgBAAQAAAAAAAAQAAgBAAAAQABAAAAgBIABAAIABgBIgBgFIgCAAg");
	this.shape_23.setTransform(232.8,25.9);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#373535").s().p("AAHCTIgHgBQgRgBgDgSIACgjIAAguIAAguQABgOgBgdIABguQgBgfACgLQAEgSAZADIgFACQANALAAAbQgBAOgDAcQgCArABAjIABBDQAAAmgEAaQAAABAAAAQAAAAgBABQAAAAgBAAQgBAAgBAAIgCAAgAgEgdQgBAEABACIABACIAAABQgBAEgCADQgBAAAAAAQAAABAAAAQAAAAAAABQAAAAABAAIAEAAIgBABIAAABQAAABAAAAQAAABAAAAQAAABABAAQAAABAAAAIACAAIAAgDIAAgCIAAgCIACgEQAAAAAAAAQAAgBABAAQAAgBAAAAQAAgBAAAAIgDgDIADgGIgBgDIAAgEIABAAIAAgDIAAgCQAAAAAAgBQAAAAAAgBQAAAAgBAAQAAAAAAgBIABAAIAAgEIACgEIgBgDIAAAAQAEgFgCgDIgCAAQgBABAAAAQAAAAgBABQAAAAAAABQAAAAAAABIgBABIAAgDIADgGQAAAAAAgBQABAAAAgBQAAAAAAgBQgBAAAAgBIAAgBIABAAQABAAAAgBQAAAAAAAAQAAgBgBAAQAAAAgBgBIgBgCIABgBIAAgBIAAgCIgBAAIABgDIABAAIABgCIAAgEIABgBQAAAAAAgBQAAAAAAAAQAAAAgBAAQAAAAgBAAIAAgBIgBgCIgBAAIABACIgBAAQAAABgBAAQAAAAAAAAQAAAAAAAAQAAAAABAAIAAABIgBABIAAAEIAAACIgCAEQAAABAAABQAAAAAAABQAAAAAAABQAAAAAAAAIABABIgBACIAAACIAAACIAAADIgBAEIAAAGIABAAIAAAAQAAABAAAAQAAAAAAABQAAAAAAAAQAAABAAAAIABACIgBABIAAADQAAABAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIABAAIgBADQAAABAAABQAAAAAAABQAAAAAAABQAAAAAAABIACAAIgBAAIgBACIAAgCIgCAAgAgDgpIgBABIAAABIABACIABABIABgCIAAgDQABAAAAAAQAAgBAAAAQAAAAgBgBQAAAAgBAAIgBAAQABAAAAAAQABABAAAAQAAAAgBAAQAAABgBAAgAgDgyIAAADIABAAIAAgDIAAAAIgBAAgAADhgIACAAIgBgDIgBAAIAAADg");
	this.shape_24.setTransform(220.7,25.9);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#373535").s().p("Ag5BqQgBgEABgJQACgIgCgEIgEgEIgEgEQgCgKALgHQAKgGAMACQAMACABAHQAAAEgEANQgDAaAOAJQAhgFgahAQglhEgCgOQgDgUAEgaQAFgeAMgNQASgRAcADQAcADASARQAFAfgFAdQgIAogcgcQALgMABgXQAAgYgPgJQgWgNgEAdQgBAHAAAlQAAAbAXAtQAaAxABAaQACAsgwAIIgLABQgmAAgKglgAATBHIAAACIABADIABACQAAAAAAAAQAAAAAAAAQAAABABgBQAAAAAAAAIABAAIAAgFIAAgDIgBgCQABgCAAgEQAAAAAAgBQABAAAAgBQAAAAgBgBQAAAAAAgBIgDgDIAAgIIgEgIIgBAAIABgBIgBgCIgBgDQAAgBgBgBQAAAAAAgBQAAAAgBAAQAAAAAAAAIABgBIgDgEIAAgGQAAgBAAAAQAAAAgBAAQAAgBgBAAQAAAAgBgBIAAAAIAAgFQAAgBgBgBQAAgBAAAAQAAgBgBAAQAAgBAAAAIgDABIABAFIAAACIgCgEIgBgHIAAgDIAAAAIAAAAIAAAAIgCgCIACgBQAAAAAAAAQAAgBgBAAQAAAAgBAAQgBAAAAAAQgBAAAAgBQgBAAAAAAQgBAAAAgBQAAAAAAgBIABgBQAAAAAAAAQAAgBAAAAQAAAAgBAAQAAAAAAAAQAAAAgBAAQAAAAAAgBQgBAAAAAAQAAAAAAgBIgBgDIAAgBIgBgDIgCgDQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAAAABAAQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAgBAAAAIgDAAIgCgBIgBgBIAAABIACABIgBABQgBABAAAAQAAAAAAAAQAAABABAAQAAAAAAAAIACACIACADQAAAAAAABQAAABAAAAQAAAAABABQAAAAABAAIAAAAIABAGIADAEIABAAIAAAAIAAACIACABIACACIAAAEIABAGIACAGIACgBIAAAAIACADIABACIAAACQAAAAAAABQAAAAAAAAQAAABAAABQAAAAAAABIADADIABAAQABAAAAAAQAAAAAAABQAAAAAAABQAAABgBABQAAAEAEAAQAAAAAAABQAAAAAAAAQAAAAAAAAQABgBAAAAIAAABIAAACIgCgCIgDABIABAIIABAEIACADIACACIAAAGIgBAEQgBAAAAABQAAAAAAABQAAAAAAAAQABABAAAAIAEgBgAAFAgQABAAAAAAQABAAAAABQAAAAAAAAQAAABAAAAIgBACIABACIABACIACgBIAAgCIgBgCQAAgBAAgBQAAAAgBgBQAAAAAAAAQgBgBAAAAgAgVgeIABACIAAAAIABABIABgBIAAgBIgBAAIgBgCg");
	this.shape_25.setTransform(210,26.6);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#373535").s().p("AhCCIQgFgKAAgRQAAgEADgGIACgKIgDgcQgCgYADglIADg/QgCggACgUQAEgmAYAJQALAEAFAQIAGAaQAKAvAFAXQAEAOALAXIAGAcQAEARAJAFQAEgkAAhHIABgvIgCgXQgDgQADgFQAEgIAKACQAJABAFAHQAEAGgBAQIgCAZIgBBpIAABEIAFAaQADASgEAHQgFAJgNABQgNABgHgHQgHgIgNgmIgYhMQgQgtgEghQAEAxgBAvQgBAWAGAqQABAUgCAFIgJAKIgJALQgFADgFAAQgIAAgEgLgAgyBgIACADIABgBIgBgCIgBgBIgBABgAgwBdIgCgDIACAAQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAgBgBAAQAAAAAAgBQAAAAABAAQAAgBAAAAIgBgEIAAgEIACgFQAAgBAAgBQABAAAAgBQAAAAgBgBQAAAAAAgBIgBgBIAAAAIAAgFIgBgDIABgDIABgGIAAgHIgCAAIAAgBIAAgDQAAAAAAgBQAAAAAAgBQgBAAABAAQAAAAAAAAIAAgBIAAgBQABAAAAgBQABAAAAgBQAAAAAAgBQAAAAAAgBQABAAAAgBQAAgBAAAAQAAgBgBAAQAAAAgBgBIgBAAQAAAAAAAAQAAgBAAAAQAAgBABAAQAAgBABgBIAAgDQAAAAAAgBQAAAAAAAAQAAAAAAgBQgBAAAAAAIgCgBIABgDIABADQABABAAAAQABAAAAAAQAAAAABAAQAAAAAAgBIABgIQAAgGgBgBIgCgCIABAAIADgIQAAgBABAAQAAgBAAAAQAAgBAAAAQAAAAgBAAIgFgBIABAAIAAgCQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBgBIAAgCIgCAAIgBACIgBACIAAADIABACQgCABgBAEIgBAEQAAABABAAQAAAAAAAAQABAAAAAAQABAAAAABIAAAAIgBAIIABAIIABAAIgCABIABADIAAADQAAAAAAABQAAABAAAAQAAABAAAAQABAAAAAAIgBAAQAAAAAAABQgBAAAAAAQAAABAAAAQAAAAAAABIABACIgEAFQAAAAAAABQAAAAABABQAAAAAAABQAAAAABABIAAABIgBACIgBAAIAAABIAAAAIgBABIAAADIAAADQABAAAAAAQABAAAAAAQAAAAABAAQAAAAAAgBIABgCIABgCIABgCIAAAFIgCAHQgCACABADIABACIgCAAQAAABAAAAQAAAAAAABQABAAAAAAQABAAAAABIACADIgCABIAAABIACADIAAAAIgBADIgBABIgBADIABAEIgBABIAAACIACABIABAAIABADIABAAgAguAVIAAADQAAABAAAAQAAABAAAAQAAABAAAAQAAABABAAIABAAQAAgBgBAAQAAAAAAAAQAAgBAAAAQABAAAAgBIABAAIABgBQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAgBAAIAAgDIgCAAg");
	this.shape_26.setTransform(186.1,25.9);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#373535").s().p("AhJCiIAGg8QABgbgCgwIgBhJQAAgSACgFQAEgJAOgDQAlgHAfAPQANAUgagBQggAAgEAIQgFANABAiQACAnAIAEIAYgBQAUAAgBANQgBALgPABIgVABQgSAGABAmQABAUADAjQA2gMgKAZQgBAEgXAHQgXAHgHAAIgEABQgaAAgCgmgAg2CFIABADIABAAIAAgDIgCAAIAAAAgAg0CDIgCgEQABABAAAAQAAAAAAAAQABAAAAAAQAAAAAAgBQABAAAAAAQAAAAAAAAQAAAAAAgBQAAAAgBAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQAAAAAAgBIAAgBIAAgIIAAAAIAAAAQACgCAAgEQABgDgBgCIgBgBIABgCIAAgDIgBgDIABgDIABgGIAAgIIgDAAIAAgEIgBgCIABgCQABAAAAgBQAAAAAAgBQABAAAAgBQAAAAAAgBQAAgBAAAAQAAgBgBAAQAAgBAAAAQAAAAgBgBIgBAAIACgFQACgDgEgCIgBgBIABgDIABADIACABIABgBIABgDIABgFQABgEgCgEIgBgCIADgLQABAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAgBQAAAAgBAAQAAAAgBAAQAAAAgBAAQgBAAgBAAIABAAIAAgDQABgBgCgEIgCAAQgBACAAADIAAACIABACIgDAGIgBAEIADAEIgBAAIgCAJIABAIIgBABIABADIAAADQAAABgBABQAAAAABABQAAAAAAAAQAAABABAAIgBAAIAAAFQAAACgDAEIACAEIABAAIgBAAIgCAFQAAABAAABQAAABAAAAQAAABAAAAQAAABAAAAIADAAIACgEIABgDIgBAFQAAAFgBACQgCADABADIABACIgCAAQAAABAAAAQAAABAAAAQAAAAABABQAAAAABAAQAAABAAAAQABABAAAAQAAAAAAABQAAAAAAABIgCAAIAAACQABAAAAABQAAAAAAAAQAAABAAAAQAAAAAAAAIABAAIgBAEIgBAAIgBAEIAAADIAAACIgBABIADACIAAAAIABAEIABAAgAgxA1IgBADIAAACQgBABAAABQAAAAAAABQAAAAABABQAAAAABAAIABAAQAAAAgBAAQAAAAAAgBQAAAAAAAAQABgBAAAAIABgCIAAgCIgBgDIgBAAIAAAAgAhChiQgJgDADgEQABgCAIgDIAAAAQAIgEAHgIIABgCIAGgGIADgCIAAAAIABgCIAAAAIAHgJIAAgBIgBgEQABgCAFgCQAMgDAWAHIAAAEIgEABIAAABQAEAFAAAEIAFAIIADAFIAIAGQACACABADIAAAAIACABIAGADQABABAAAAQAAABAAABQAAAAAAABQgBAAAAABIgKACIgMABQgWAAgCgRIgBgCIgFgKIAAgEIABgCQgDABgEAIIgBAAIgBADIAAAAIgBADIgBAAQgIAKgEADQgEAEgGACIgJACIgJgCgAANhoIABABIAAAAIgBABIACAAIABAAIAAAAIgCgBIABgBIgBAAIAAAAIAAgBIgBABIAAgBIAAAAIAAAAIAAAAIgBAAIABABIAAAAIgBgBIABAAIAAAAIAAAAIAAABIABAAIAAAAIAAABIgBgBgAAAhtIACABQgBAAgBABQAAAAAAABQAAAAAAAAQAAABAAAAIAHABQAAAAABABQAAAAAAAAQABABAAAAQAAAAABAAIAAgCIABgBIgBAAIgBAAIAAABIAAgBIgBACIgBgBIAAAAIAAgBIgBgBIAAAAIgEgDIgBAAIAAgCIAAAAIgBACgAAQhnIABABIAAgBIAAgBIADgBIgDgBIgBAAIABABIgBACIgBAAIAAAAIABAAgAAOhpIABAAIAAgBIgBAAgAAOhpIAAAAIAAgBgAALhpIAAAAIAAAAgAAKhqIABAAIAAABIAAgBIAAAAIAAAAgAAMhqIAAAAIAAAAIABAAIgBAAIAAAAgAALhqIAAAAIAAAAgAAIhqIABAAIAAAAgAALhqIAAgBIAAAAgAAJhrIAAAAIABAAIAAAAgAALhrIAAAAIAAAAIABAAIAAAAIAAAAIgBAAIAAAAIAAAAIgBAAIAAAAIAAAAIAAAAgAAJhrIAAAAIAAAAgAAPhsIABAAIAAAAIAAAAIAAgCIgCAAIABACgAAMhsIABAAIgBAAgAAKhsIgBAAIAAAAIABAAgAAMhsIAAAAIAAAAIAAAAIAAgBIAAgBIABAAIAAAAIAAgBIgBAAIABABIgBAAIAAAAIAAgBIAAAAIgBAAIgBAAIAAABIACAAIAAAAIAAAAIAAABIAAAAIAAgBIgCAAIABABIABAAIgBAAIAAAAIAAABIAAAAIAAAAIAAAAgAAJhsIAAAAIAAAAgAAIhsIAAAAIAAAAgAAOhtIAAgBIgBgBgAAJhtIAAAAIAAAAIAAAAIAAAAgAAHhuIABABIAAAAIAAAAIAAAAIAAAAIAAgBIAAAAIAAAAIAAAAIAAAAIgBAAgAAKhtIAAgBIgBAAIAAAAIAAAAIAAAAIABgBIAAAAIAAAAIABAAIAAAAIgBAAIAAAAIAAgBIAAABIAAAAIgBAAIAAABIAAAAIgBgBIABAAIAAAAIAAgBIAAAAIgBAAIAAAAIAAAAIAAAAIAAAAIgBAAIAAgCIgCAAIACgBIAAgBIAAABIABgBIABAAIgCAAIgGAAIAAAFIACABIgBgBIACgBIAAACIABAAIAAAAIAAAAIABAAIAAAAIAAgBIgBAAIAAAAIABAAIgBABIAAgBQAAAAAAAAQgBAAAAAAQAAAAAAAAQABgBAAAAIAAABIAAgBIAAAAIAAgBIAAAAIACAAIAAAAIAAABIAAAAIABABIAAAAIAAAAIAAAAIAAAAIAAAAIAAAAIAAAAIgBAAIAAgBIAAABIAAAAIAAAAIABAAIAAAAIAAAAIABABIAAAAIAAAAIAAAAgAAIhwIAAgCIAAAAgAAMhtgAAIhugAAGhvgAAKhvgAAIhvIAAgBIAAAAIAAABgAAEhyIABAAIAAAAgAAeiAQAAAAgBAAQgBgBAAAAQgBAAAAgBQAAAAAAgBIgBgEIAAgCIABgEIAAgFIACgFQABgFACgBIACgBQAHgDADgDQACgEgBgFIAAgEQACgIgHABIgCAAIgGADIgCACIgHADIgDABIgDABQgBAAgBgBQAAAAAAAAQgBgBAAAAQAAgBAAgBQgCgFAJgGQAHgGAIgCIAOgCQAEAAAGACIAIAEQAEAEABAFQADAKgIANQgHALgFACIgCABIgEABIgEADIACAIQABAEgNAEIgDAAIgDgBgAAhiYIgBACIAAACQgCAFABAIIACABQADgCgBgDIABgCIABgHIAGgFIgDgCQgGACgBABgABBivIAAAAIAAAAgABBiwIAAAAIAAAAIAAAAIgBAAIAAAAIAAgBIAAABIAAAAIAAAAIAAAAgABBiyIAAAAIABAAIAAAAIAAAAIAAAAIAAgCIgEABIAAABIABAAIABAAIAAAAIAAAAIAAAAIABAAIAAAAg");
	this.shape_27.setTransform(174.6,20);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#373535").s().p("AgSB7QAAgDADgHIADgLQACgJAAgIIgDgRIgEg2QgCgdgMgUIgSgkIgRgZQgMgRAAgHQABgOARAIQAPAHAGAJQAEAFAJAbQAIAXAIAEQAJAGAFgPIAKgZQAMgVADgKQABgPAFgEQAJgJARAEQARAEABALQAAAJgOAVQgRAagCAEQgOAigFAbQgCAHgFANQgEAKABANQADAcAABKQgJABgHAAQgVAAgBgTgAAEB7IACAAIgBgCIgCAAgAAFB3IgBgBIABAAQABgBAAAAQAAAAAAAAQAAAAAAAAQAAAAgBAAQAAgBAAAAQAAAAAAAAQAAAAAAgBQAAAAABAAIgBgCIAAgDQABAAAAgBQAAAAAAgBQABAAAAgBQAAAAAAAAQAAgBABAAQAAgBAAAAQAAgBAAAAQgBAAAAAAIgBgBIABgBIgBgEIABgCIABgEQAAgBAAAAQAAgBgBAAQAAgBAAAAQAAgBgBAAIgCAAIAAgCQAAAAgBgBQAAAAgBAAQAAAAAAAAQAAgBABAAIABgBIABgCQAAgBAAAAQAAgBAAAAQAAAAgBAAQAAAAgBAAIgBAAQgBgBAAAAQAAAAABgBQAAAAAAgBQABAAABAAQAAgBAAAAQAAgBAAAAQAAgBgBAAQAAgBgBAAIgCABIAAACIAAABIAAADIAAAAQAAAAAAAAQAAAAAAABQAAAAAAABQAAAAAAABIAAAEIAAACIAAAAIAAADQAAABAAAAQAAAAAAABQAAAAAAAAQAAABAAAAIABAAIACgDIABgBIAAADQAAAAAAABQAAAAgBABQAAAAAAABQAAAAgBABQAAAAgBAAQAAABAAAAQAAABAAAAQAAABABAAIABACIAAAAIgCAAIACACQAAAAAAAAQABAAAAAAQAAAAAAAAQAAABAAAAIgCABIABABIABABIAAABIgBACIgBAAIgBACIABACIgBABIgBABIADAAIAAABIABABIABAAgAAHBTIABAAIgBgCIgBAAIABACgAAFBJIAAABIAAACQAAAAAAABQAAAAAAAAQAAABAAAAQABAAAAABIABgBIgBgBIACgBQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAAAAAAAIgBgCIAAgBIgCABgAADBIIACAAIABgDIABgDQAAAAABgBQAAAAAAgBQAAAAgBgBQAAAAAAgBIgCgBIABgBQABgEACgBQAAgBABAAQAAAAAAAAQAAgBAAAAQAAAAgBAAIgEAAIAAgBIABgBIgBgDIgCgBIAAAAIgCAFIABABIgCAEIAAACIABADIgBAFIAAAFIABAAIABgCg");
	this.shape_28.setTransform(159.3,26.6);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#373535").s().p("AgWCQQgRgGgHgQQgEgKgDgWQgEgfAAgqIABhHQADgZgBgLIgDgNIgDgNIgBgLQABgFAIgEQAMgGAPACQALABAGAIQAGAIAAAGIgEAOQgDAQAAAXIgBAnIgDBSQACBDAWgEQAWgDgCgnQgFgsACgLIAAgBQACgXAAgjIAAg9IgBgWQABgQAGgFQAPgLAGAPQAEALgCAOQgBAMACAVIACAgQgCAwABAZQABAkgEAbQgCALAAAUQgDAOgSAEQgKADgWABIgMACIgFABIgIgCgAgtAhIABADIABAAIgBgDIgBgBIAAABgAgsAeIgCgEIACAAQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBAAQAAAAgBAAQAAgBAAAAQAAgBAAAAQABgBAAAAIgBgFIAAgEIAAgBIACgGIAAgFIgBAAIAAAAIABgDIgBgHIACgLIAAgIIgDAAQAAgBABAAQAAAAAAAAQAAAAAAAAQgBAAAAAAIAAgEQAAAAAAgBQgBAAAAgBQAAAAAAAAQABgBAAAAIAAAAIAAgBIACgFQAAgBAAgBQAAgBAAAAQAAgBgBAAQAAgBAAAAIgBAAQAAgBgBAAQAAAAAAAAQAAgBAAAAQABAAAAgBIABgCQADgEgDgDIgCAAIABgBIABgDIAAAEQABAAAAAAQAAAAABAAQAAAAABAAQAAAAAAAAIACgKQABgFgBgEIgBgCIABgCQABgHACgDQAAgBABAAQAAgBAAAAQAAgBAAAAQgBgBAAAAQAAAAAAAAQgBgBAAAAQgBAAgBAAQAAAAgBABIAAgBIABgDQAAgCgCgEIgBAAIgBAGIgBADIABACIgDAGIgBAFIADAFIAAAAIgDAJIAAAKIgBABIABAEIgBAEQAAABAAAAQAAABAAAAQABABAAAAQAAABAAAAIgBAAQAAAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIAAADIgCAHQAAAAAAABQAAAAAAAAQAAABAAABQAAAAABABIAAABIgCAFQgBAEABACIABABIACgBIABgFIACgDIgBAGIgCAIQgCADACAEIAAABIgCABQAAABAAAAQAAAAAAABQABAAAAABQABAAAAABIACACIgCABQAAAAAAAAQAAAAAAAAQAAAAAAAAQAAAAAAABIABADIAAAFIgBAAQAAAAAAABQAAAAAAAAQgBABAAAAQAAABAAABIABAEIgBADIAAABIACABIAAABIACAEIABAAIAAAAgAAvgxIABACIAAAAIABgCIAAgBIgBgBIACgCIAAgCIgBgCIABgDIAAgEIAAAAIABAAIgBgBIABgCIgBgBIABAAIAAgCIACgDIgBgBIgBgBQABgBAAAAQAAgBABAAQAAgBAAAAQAAgBAAAAIgCAAIAAACIgBABIAAgCIABgDQABAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAIgBgCIABABIABAAIgBgCIgBgBIABAAIAAgBIgBgBIABgCIABAAIAAgEIAAAAIgBgBIgBgBIAAAAIABABIgBAAIAAABIAAADIAAABIAAAAIgBADIAAACIAAAAIAAABIAAACIAAABIgBABIAAACIgBAEIACAAIAAADIgBAAIgBACIABACIABAAIgBACIgBABIAAgCQAAAAAAgBQAAAAAAAAQAAAAAAAAQAAgBAAAAIgBAAQABAAAAABQAAAAAAAAQAAAAAAAAQAAAAgBAAIgBABIAAABIABABIABAAIAAAAIABABIgCAAIAAABIgBADQAAAAAAABQAAAAAAAAQAAABAAAAQAAAAAAABIABAAIAAABIgCAEIAAABQAAAAAAABQAAAAABAAQAAAAAAAAQAAgBABAAgAgqg3IAAADQgBABAAABQAAAAAAABQAAAAAAABQABAAAAABIABAAQAAgBAAAAQAAAAAAgBQAAAAAAgBQAAAAAAAAIACgCIAAgCIgBgEIgCAAgAAvhGIABAAIAAgCIgBAAgAAxhAIABAAIgBABgAAyhAg");
	this.shape_29.setTransform(144.2,25.7);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#373535").s().p("AAACRQgJgEgEgJQgCgHACgTQACgWAAgEIgBh2IABgeQABgTgDgLQABAEgCgDQAAgBgBAAQAAgBAAAAQAAAAAAgBQABAAAAAAQgHgDgWAEQgVADgJgHQgFgFAAgJQgBgJAEgGQAFgHAOADQAUAGAEgBQAKgBAPgGQAHgEAHAAIARAAQASgEAJgBQAPgCAJAMQALAQgNAFQgHADgTAAQgSABgCABQgHADgBAMQgBANABAzQAAAoAEBTIAEAfQABATgKAFQgEACgEAAQgFAAgFgDgAAEBJIABADIABAAIgBgDIgBAAIAAAAgAAFBHIgBgEIABAAQAAAAAAAAQABAAAAAAQAAAAgBgBQAAAAAAAAQAAAAAAAAQgBgBAAAAQAAAAABgBQAAAAAAgBIAAgEIAAgEIABgFIAAgFIgBgBIABgDIgBgGIABgDIAAgGQABgEgBgDQgBAAAAAAQAAgBgBAAQAAAAAAAAQgBABAAAAIAAgBIAAgDQgBAAAAAAQAAgBAAAAQAAgBAAAAQAAAAAAgBIABgBIABgEQAAAAAAgBQAAgBAAAAQgBgBAAAAQAAgBgBAAIgBAAQAAAAAAgBQgBAAABgBQAAAAAAgBQAAAAABAAQADgDgEgCIgBAAIAAADIAAACQAAABAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIAAAAQAAACAAADIgBAGIABAEIAAAAIgBAFQgBADACACQAAABAAAAQAAAAAAAAQAAAAAAAAQAAAAAAgBIACgFIABgCIAAAFIgCAHQgBADABACIABADIgCAAQAAAAAAABQAAAAAAAAQAAABAAAAQABAAAAABQABAAAAABQAAAAABAAQAAABAAAAQAAABAAAAIgCABIABABQAAABAAAAQAAABABAAQAAAAAAAAQAAABAAAAIAAAAIgBADIgBABIAAADIAAAEIAAACIgBABIADABIAAAAIACAEgAAEgEIAAACIAAACQgBABAAAAQAAABAAAAQAAABABAAQAAAAABAAIABAAQgBAAAAAAQAAgBAAAAQAAAAAAgBQAAAAABAAIABgBIAAgBIgBgDgAACgFIADgBIABgIQABgEgCgDIgBgCIAAgCIADgJQAAgBAAAAQAAgBAAAAQABAAgBgBQAAAAAAAAQgBAAAAAAQgBgBAAAAQgBAAgBABQAAAAgBAAIABgBIABgCIgCgGIgCAAIAAAGIAAACIAAACIgBAFIgBAFIACAEIAAAIIAAAEIAAAEIAAAAIABgCg");
	this.shape_30.setTransform(130,25.3);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#373535").s().p("AAHCTIgHgBQgRgBgDgSIACgjQgBg9ABgfQABgOAAgdIAAguQgCgfADgLQAEgSAaADIgGACQANALgBAbQAAAOgDAcQgCAhABAtIABBDQAAAmgDAaQAAABAAAAQgBAAAAABQgBAAgBAAQgBAAgBAAIgCAAgAgDggIgBADIAAAGIACACIgBABIgDAHQAAAAgBABQAAAAAAAAQAAABAAAAQAAAAAAAAIAFAAIAAABIgBABIABAEIACAAIAAgDIAAgCIAAgCIACgEIABgDIgDgDQACgEAAgCIAAgDIAAgDIABgBIgBgDIABgCQAAAAAAAAQAAgBAAAAQAAAAAAgBQAAAAgBgBIABAAIAAgEIADgEIgCgDIAAAAIACgEQABAAAAgBQAAAAAAgBQAAAAAAgBQAAAAgBgBIgDAAIgBAEIgBABIAAgDQAAgEACgCQABAAAAAAQABgBAAAAQAAgBAAAAQAAgBgBgBIgBgBIADAAQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAAAgBgBQAAAAAAAAQgBAAAAAAQAAgBAAAAQAAgBgBAAIADgBIAAgBQAAAAgBAAQAAAAAAAAQAAgBAAAAQgBAAAAgBIAAAAIABgDIABAAIABgCIAAgDIABgBIAAgBQAAAAAAgBQAAAAAAAAQAAAAgBAAQAAAAgBAAIAAgBQAAAAAAAAQAAgBAAAAQgBAAAAgBQAAAAgBAAIABACQAAAAAAAAQAAAAgBAAQAAAAAAAAQAAAAAAAAIgBABIABABIgBABIAAAGIgCAEIAAAEIAAABIAAACIAAACIAAACIAAADQAAAAAAABQAAAAAAABQAAAAAAABQgBABAAAAIAAAGIABAAIAAADIAAACIAAABIAAADQAAABAAAAQAAABAAAAQAAAAAAABQAAAAAAAAIAAAAQABABAAAAQAAAAAAAAQgBABAAAAQAAABAAAAQAAABAAABQAAAAAAABQAAAAAAABQAAAAAAABIABABIgBABIAAgCIgCAAIgBADgAgCgpIgCABIAAABIABACIABABIABgCIAAgDQABAAAAAAQAAgBAAAAQAAAAAAgBQgBAAgBAAIgBAAQABAAAAAAQABABAAAAQAAAAAAAAQgBABAAAAgAADhgIACAAIgBgDIgCAAg");
	this.shape_31.setTransform(111.5,25.9);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#373535").s().p("AgDDIQgKgDgGgIQgDgFgFgMIAAgBQACgFAKgEQAKgEAFACQAKACAHAJQAIAKgFALQgFAKgLAAIgHgCgAgQCyIAAAAIAAABIAAABIgBABIABABIABABIABAAIABABIABABIABAAIACAAIABgBIgBgBIgCAAIAAgBIgBgBIADAAIABAAIABgBQABAAAAgBQAAAAAAAAQABgBgBAAQAAAAAAAAIgBgBIACAAQAAAAAAAAQAAAAAAAAQAAAAgBgBQAAAAgBAAIgBAAIACAAQAAgBgBAAQgBAAABAAIgBAAIABgBIABAAIAAgBIAAgBIABAAIgCAAIgBgBIAAAAIgBgBIAAgCIgBAAIgBAAIAAABIgCgBIAAABIgBAAIAAAAIAAAAIABACIAAAAIgCACIAAACIgBAAIAAABQAAAAgBAAQAAABAAAAQAAAAABAAQAAAAABAAIgBAAgAgOC0IABgBIAAgBIAAgBIgBAAQgBAAAAAAQAAAAAAAAQAAAAABgBQAAAAABAAQABAAAAAAQAAAAAAAAQgBAAAAgBQAAAAgBAAIgBAAIABAAIAAgBIABABIACAAIABAAIAAgBIABgBIgBgBIACAAIgBABIAAAAIABABIgBAAIgBACIAAAAIAAAAIgBgBIgBABQAAABAAAAQgBAAABAAQAAAAAAAAQAAAAABAAIAAAAIAAAAIABgBIABAAIAAABIAAABIAAABIgBAAIAAAAIgBAAIAAAAIgCACgAgBCLQgCgCgDgEIgFgFIgIgCQgFAAgCgCQgRgJgIgeQgDgMgBghQgBgdgFgMQAFgDABgPIABgTQADgjAGgRQAJgdAJgIQAIgIANgBIAXAAQANABAFADQAEADAGAMQANAZAAAUQABAvgCAkQgCAxgJAjQgMAwgWAAQgHAAgGgEgAgThFQgDASAAAlQgCAfADAVQAAAHAIAYQAGAVgBAHQAIAGAFgHQADgEADgQQAFgaACgkQABgNgCgVIgCgjQAAghgHgWQgVAKgGAfgAAgA8IAAADIABABIABgDIgBgBIgBAAgAAjA6IgBgDIACABQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAgBAAAAQABAAAAgBIAAgDIABgEIAAgBIADgFQABgEgBgBIAAgBIABgCIAAgDIgBgDIACgDIABgGQABgFgBgDIgCAAIAAgBIAAgGIAAAAIACgDQAAgBAAAAQAAgBAAAAQAAgBAAAAQgBgBAAAAIgCgBQAAAAAAAAQAAAAAAgBQAAAAABgBQAAgBABgBQACgDgDgDIgDABIAAADIAAADQAAABAAABQAAAAAAAAQAAABAAAAQABAAAAAAIgBABQAAAAgBABQAAAAAAABQAAABAAAAQABABAAABQAAACgDACIACADIAAABIgCAFQgBADABACIABAAIABAAIACgFIABgCIAAAFQgBAGgCABQgCADABACIAAADIgBgBQgBABAAAAQAAABAAAAQABAAAAABQABAAAAABIABADIgCAAQAAABAAAAQAAAAAAABQAAAAAAAAQAAAAAAAAIABADIAAAAIgBADIgBABIgBACIgBAEIgBACIgBAAIACACIAAABIABABIAAACIABAAgAAtgQIgBACIAAADQAAABAAABQAAAAAAABQAAAAAAABQABAAAAAAIABAAQAAAAAAAAQAAgBgBAAQAAAAABgBQAAAAAAgBIACgBIAAgCIgBgDIgBAAIgBAAgAArgSIADAAIABgIQABgFgBgDIgCgCIABgCIACgJQABgBAAAAQAAgBAAAAQAAAAAAgBQAAAAgBAAQAAAAAAgBQAAAAgBAAQgBAAAAAAQgBABgBAAIAAgBIABgDIgCgFIgCAAIgBAFIAAADIABACIgDAGIAAAEQAAAAABABQAAAAAAABQAAAAABABQAAAAABABIAAAAIgCAIIABAJIABAAIABgCIABACgAgpiSQgJgEADgDQABgCAIgEIAAABQAHgFAHgIIAKgKIAAABIACgDIAAABIAHgKIAAgBQgDgFAIgCQAKgDAYAHIAAADIgEACIAAABQAEAFAAAEIAAAAIAEAIIAEAEIAIAHIgBAAQADABABAEIAAAAIABAAIAHAEQABAAAAABQAAAAAAABQAAABAAAAQgBABgBAAIABAAIgKADIgMABQgYAAgCgRIgGgNIAAgDIABgDQgEADgDAGIAAAAIgBABIAAADIAAgBIgBAEQgKALgDACIABAAQgEADgHADIgIABIgJgBgAAoiWIABAAIAAAAIAAAAIABgBIgBAAIAAAAIAAgBIAAAAIAAgBIABgBIAAACIADgBIgDgBIgBAAIgBAAIgBAAIAAABIAAgBIAAABIAAAAIAAAAIgBAAIAAAAIAAAAIAAAAIAAAAIAAABIAAAAIAAAAIAAABIACAAIABAAIAAABgAAfiZQABABAAAAQABABAAAAQABAAAAAAQAAAAABAAIABAAIAAAAIgBgBIAAgBIAAAAIABgBIAAAAIAAAAIAAAAIgBAAIAAAAIAAgBIAAABIgBAAIAAABIAAAAIAAAAIAAAAIAAAAIAAAAIgBAAIABAAIgBABIgBgBIAAAAIgBAAgAAmiYIAAgBIgBAAgAAYieIADABQgBABgBAAQAAABAAAAQgBABAAAAQAAAAABAAIAGABIAAgBIgEgDIgBAAIAAgCIgBAAIgBABgAAliaIAAAAIABAAIAAABIAAAAIAAAAIAAgBIAAAAIAAAAIABAAIAAgBIgCABgAAkiaIAAAAIAAAAgAAgiaIABAAIAAgBgAAlibIABAAIAAAAIgBgBgAAjicIAAABIAAgBIAAAAgAAmicIAAAAIAAAAgAAiicIABAAIgBAAgAAkicIAAAAIAAAAIAAAAIAAAAIAAAAIAAAAIAAgBIAAABIAAAAgAAlicIABgBIgBAAgAAoidIABAAIAAgBIgCAAgAAjidIAAAAIgBAAIAAAAIAAAAIgBAAIABAAIABAAgAAhidIAAAAIAAAAIAAAAIgBAAIAAAAIABAAgAAiidIABAAIgBgBIAAAAgAAjieIABAAIAAAAIAAAAIAAAAIAAAAIgBAAgAAhieIABAAIAAAAIAAAAIgBAAgAAhieIAAAAIAAAAIAAAAIgBAAIAAAAIAAAAIAAAAgAAlifIAAAAIAAAAIABAAIAAABIABAAIgCgEIAAACIAAAAIAAAAIgBAAIABAAIgBAAgAAfieIAAAAIAAAAgAAdieIABAAIAAAAgAAcieIgBgBIACgBIAAABIABAAIAAAAIAAAAIAAAAIAAgBIAAAAIAAgBIAAAAIACAAIAAAAIAAAAIAAAAIgBgBIAAgBIAAgBIABAAIABAAIABAAIgDgBIgGAAIABAGIAAAAIACABgAAlifIAAAAIAAAAgAAiifIAAAAIAAAAIABgBIAAAAIgBABgAAgifIABAAIAAAAgAAeifIAAAAIABAAIAAAAIAAAAIAAAAIABAAIgBAAIAAAAIABgBIAAAAIAAAAIABAAIgBAAIAAAAIgBgBIAAABIAAAAIAAABIAAAAIgBgBgAAiiiIgBABIAAABIAAAAIAAAAIABAAIAAAAIAAAAIAAgBIAAAAIABAAIAAgBIgBAAgAAjigIABAAIAAgBIgBABgAAjijIAAAAIgBAAIABAAgAAniYIABgBIAAAAIAAgBIABACIgBABgAAmiYIABAAIgBgBIAAAAIABAAIAAABIAAgBIAAABIAAABgAAniYgAApiYgAAkicgAAligIAAAAIAAABgAAligIAAAAgAAeihIAAAAIAAgBIAAAAIAAABIAAAAg");
	this.shape_32.setTransform(100.6,25.6);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#373535").s().p("AAeB/QgBgJAAgvIABgkQABgdgGgEQgDgCgMAEIgNAHIgLAFQgCADgBAKQgGApAGAiQAEAOgBACQAAAJgKADQgEABgIgCQgHgCgEgDQgJgHgBgSIgBgeIAAglIABgjQABgdgCgjIAAggQgGgTACgHQACgKAMgEQANgEAIAGQAJAGAAAXIgBAiIABAhQABAZAHABQADABAMgFIAQgIQAGgGACgJIAAgRIABgjQABgWgBgOIgDgLQgBgEAJgFQAHgEAHACQAHABADAGQAFAJgBAbIgCAlIgCBNIACBEIABAUIAAAUIgCAPQgBAJAAAGQgIAGgGAAQgLAAgEgYgAgrgEIgBAGQgBAEABAEIACACIgBABQgBAHgCACQAAABAAABQAAAAAAABQAAAAAAAAQAAABAAAAIAFAAIgBAAIAAADIABAFIACAAIABgFIAAgDIgBgCQACgBABgEIABgEIgDgEIAAgBIACgHIgBgHIAAAAIAAAAIABgBIAAgDIAAgDQAAgBAAAAQAAgBAAAAQgBgBAAAAQAAAAAAgBIABAAIgBgFIADgGIgCgDIAAgBIABgFQABgDgBgCIgCAAQgBABAAAAQAAABAAAAQAAABgBABQAAAAAAABIgBACIAAgFIACgHQACgCgBgDIgCgDIAAgBIABACIACAAQAAAAAAgBQAAAAAAAAQAAgBgBAAQAAgBgBgBQAAAAAAAAQgBAAAAgBQAAAAAAAAQAAgBAAgBIACAAIAAgCIgCgCIAAgBIABgDIABgBQAAAAAAAAQAAAAABgBQAAAAAAAAQAAgBAAgBIAAgDIAAgCIABgBIgDgCIgBgDIgBAAIABADIgBAAQAAAAAAAAQgBAAAAABQAAAAAAAAQAAABABAAIAAABIgBABIABAEIAAAEIAAAAIgCAFIAAAFIABABIgBADIABAGIgBADIgBAGIAAAHIADABIAAADQAAABABAAQAAABAAAAQAAAAAAABQAAAAgBAAIAAABIgCAEQAAABAAABQABAAAAABQAAAAAAABQAAAAABAAIABAAQABABAAAAQAAAAAAABQAAAAAAAAQAAABgBAAIgBACQgDACAEADIACABIgBAAIgBADIgBgDIgBgBIgCABgAgsgPQABABAAAAQAAAAAAABQABAAgBAAQAAABAAAAIgCABIAAACIABADIABAAIABAAIAAgCIAAgDIABgCIgCgCIgBAAgAgohVIACAAIgBgDIgCAAgAglgEIAAAAIAAAAg");
	this.shape_33.setTransform(86,25.7);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#373535").s().p("AgSB7QAAgDADgIIAEgLQACgMgDgWIgFg2QgCgdgLgUIgTgkIgRgYQgMgRABgIQAAgOASAIQAOAHAHAJQAEAGAIAaQAIAXAIAFQAJAFAGgOIAKgaQALgUADgLQABgOAFgFQAJgIARAEQARADABAMQAAAJgOAVIgTAdQgMAfgIAeIgGAUQgEALABAMQADAZAABNQgKACgHAAQgUAAgBgTgAAFB7IABAAIgBgDIgBAAgAAFB3IgBgCIACAAIAAgBQgBAAAAAAQAAAAAAAAQAAgBAAAAQABAAAAgBIAAgCIgBgCIAAAAIABAAQAAAAAAgBQAAAAABgBQAAAAAAgBQAAAAAAgBIAAgBQABAAAAgBQAAAAAAAAQAAAAgBAAQAAAAAAgBIgBAAIABgCIgBgDIABgCIAAgEIAAgEIgDAAIAAgBIAAgCQgBAAAAAAQAAAAgBAAQAAAAAAAAQABgBAAAAIABgBIABgDQAAAAAAAAQAAgBAAAAQgBAAAAAAQAAgBAAAAIgCAAQAAAAAAAAQAAAAAAgBQAAAAAAAAQABgBABgBQAAAAAAgBQAAAAAAAAQAAgBAAAAQgBgBAAAAIgDAAIAAACIAAACQAAAAAAABQAAAAAAABQAAAAAAAAQAAAAAAAAIAAAAIAAAEIAAADIAAACIAAABQgBAEABACIABAAIACgDIABgCIAAADIgBAEQgBABAAAAQgBABAAAAQAAABAAAAQABABAAAAIACACIAAAAIgBgBIgCAAIACACQAAAAAAABQAAAAABAAQAAAAAAAAQAAABAAAAIgBAAIAAABIABACIAAAAIgBACIAAAAQgBABAAAAQAAAAgBAAQAAAAAAABQAAAAAAAAIABACIgCACIADABIAAAAIACACIAAAAgAAFBKIAAACQAAAAgBABQAAAAAAAAQABABAAAAQAAAAABAAIABAAQAAAAgBAAQAAgBAAAAQAAAAAAAAQAAAAABgBIABgBIgBgDIgBAAgAADBIIADgBIAAgCIABgDQAAgBAAAAQABgBAAAAQAAgBgBAAQAAgBAAAAIgCgCIABAAQABgEACgCIAAgBIgEgBIAAAAIABgCIgBgDIgBAAIgBAAIgBADIgBACIACABIgDADIAAADIABACIgBAFIAAADIAAADIABAAIABgCg");
	this.shape_34.setTransform(63.9,26.6);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#373535").s().p("AgkCxQgIAAgFgIQgGgHgBgMIAAgVQACgZAIgkIAOg8QALg5ALgiQAFgNACgDQADgHAJgDQAKgCAJADQAJADADAJQAAADgGAUIACAYQABASAAAiIABAfQABARACAOIAHA2QAAAIAFAPQAEAOAAAHIAAABQgSAOgLgIQgCgCgCgIQgCgIAAgGQAAgMgFgRQgIAEgPAGQgHAEgCgBIgBAKIgBAQQgBAKgDAEQgGAHgHAAIgCAAgAgoCLIABAAIAAgDIgCAAgAgnCHIgBgDIACAAQAAAAABAAQAAAAAAAAQAAAAAAAAQgBgBAAAAQAAAAAAAAQAAgBAAAAQAAAAAAAAQABAAAAAAIAAgDIABgDIAAAAIADgDIAAgEIAAAAIAAgBIABgBIAAgCIAAgCIACgDIABgDIABgGIgDAAIABgDIgBgCIABAAIADgDIgBgDIgCgBIACgCQABgBAAgBQAAAAAAgBQAAAAAAgBQAAAAgBAAIgCgBIAAAAIACgCIABADIACAAIADgGIAAgFIAAgBIAAAAIgBgBIAAgBIAEgHIABgBIgBgBQAAgBgBAAQAAAAgBAAQAAAAgBAAQgBAAAAABIAAgBIABgCIgBgCIgCgBIgBAAQgBAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIAAACIABACIgDAEIgBACIACADIAAABIgDAFIAAAGIABAAIgCAAIABADIgBACQAAAAAAAAQgBABAAAAQAAABABAAQAAAAABAAIgBAAQgBAAAAABQAAAAAAAAQAAABAAAAQAAABAAABIgDAEIACACIAAABIgDADQgBAAAAABQAAAAAAAAQAAABAAAAQAAABAAAAIADABIACgDIACgCIgBAEIgDAEQgBAAAAABQgBAAAAABQAAAAAAABQAAAAAAABIABABIgCAAQAAAAAAAAQAAABAAAAQAAAAAAABQABAAAAABIABACIgCAAIAAABQABAAAAABQAAAAAAAAQAAABAAAAQAAAAAAAAIAAABIgBACIgBAAIgCACIAAACIgBACIgBAAQAAAAAAABQABAAAAAAQAAAAABAAQAAAAABAAIAAABIABADgAABgEIgBAbQgHAogCAbQATAAAFgMQACgFgCgbIAAgoQAAgWgGgPQgEAEgEAXgAgaBTIgBADQAAAAAAAAQAAABAAAAQAAAAAAABQABAAAAAAIABAAQAAAAAAAAQgBgBAAAAQAAAAABAAQAAAAAAAAIACgBQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAgBAAAAIgBgCIgBAAgAAOiCIgRgTIgNgHQgGgFAHgIQAIgJAHADQAFACAIAJIASAPQALAMgFAIQgEAEgGAAQgGAAgHgFgAAMiMIACABQgBABAAAAQgBAAAAABQAAAAAAABQAAAAAAAAIAIABQAAABAAAAQABAAAAABQAAAAABAAQAAAAAAAAIABgBIAAAAIAAgCIgBABIAAAAIAAAAIgBAAIAAABIgBgBIAAAAIgBgBIgEgDIgCAAIAAgCIAAAAIgBABgAAdiJIAAAAIAAABIgBACIABAAIAAABIABAAIAAgBIACgBIgDgBIABgCIgBAAgAAciKIAAABIABAAIgBgBIABAAIAAgCIgDgBIABACIABAAIAAABgAAaiLIAAgCIgBAAgAAYiMIAAAAIgBAAgAAViMIAAAAIgBAAIABAAgAAMiOIABABIAAgBIAAgCIAEgBIAAAAIABAAIABgBIAAAAIABAAIABAAIAAgBIgCAAIgGAAIAAADQAAAAAAABQgBAAAAAAQAAAAAAABQAAAAAAAAgAAWiPIABAAIAAAAIABAAIgBgBgAAViPIABAAIAAAAIAAAAIABAAIAAgBIAAAAIAAgBIAAABIgBAAIgBgBIAAgBIgBAAIAAABIABAAIgBACIAAAAIABgBgAARiQIABAAIgBAAgAAYiQIAAAAIAAgBIgBgBIABACgAAWiSIABAAIAAAAIAAAAQgBgBAAAAQAAAAAAAAQAAAAgBAAQAAAAAAAAIABABIgBAAIABAAgAAciKg");
	this.shape_35.setTransform(50.2,23.2);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#373535").s().p("AgrCLQgKgEgJgLQgRgVgDgpQgEgmAEgnQAFgqAMgjQAIgVAFgIQAJgOAOgDQANgDAKABQAKACAEACIANAGIgBAHIAOAdQAGAVgPADQgOAEgLgaQgHgVgOARQgKALgDAYIgEAnQgDAqABAlQAAAVAFAPQAIAYARgGQAKgEAGgYQAIgXAJgEIgEg/QgDgCgFACQgFACgBgBQgFgBgFABQgGgBgEgHQgEgGABgEQABgDAFgEQALgJAVgBQARgBATADIARAEQALADABAHQABAJgKABQgOABgBACQgHAGABAWIAEAhQABAPAGAVIAIAkQAFAYgQgLQgJgFgQgNQgHgCgFAEIgKALQgJAHgHADQgFACgMAAIgFAAQgNAAgIgCgAhCAaIgBAAIAAAMIABADIACACIgBACQgBAFgCACIgBABQgBAAAAABQAAAAAAAAQAAAAABABQAAAAAAAAQAAAAABAAQAAAAABAAQAAAAABABQAAAAABAAIAAABIgBABIgBAFIACABIABgBIAAgBIABgCIACgCIgBgDQACgBACgEIABgCIAAgCQAAgCgDgCIAAAAIABgEIAAgFIgBgEIgBgEIgBAAIACgBIgCgDIAAgDQAAgBAAAAQAAgBgBAAQAAAAAAgBQAAAAgBAAIABAAIgBgFIABgDIABgBIAAgBIAAgCIgCgCIADgCQAAgBAAAAQABgBAAAAQAAgBAAAAQAAgBAAgBIgDAAQAAAAgBAAQAAABAAAAQgBABAAAAQAAABAAABIgCACIABgFQABgEACgCQADgCgBgDIAAgDIAAABIABAAIABAAQABAAAAAAQAAgBAAAAQAAAAgBgBQAAAAgBgBIAAgEIABABIABgCIgBgDIACgDIABAAIACgDIAAgEIABgBIABgBIgCgCIAAAAIgBgEIAAAAIABADIgCAAQgBAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAAAQABAAAAAAQAAABAAAAQAAAAAAAAQAAAAgBABIgBABIAAAEQgBAAAAABQAAAAAAABQAAAAAAABQAAAAAAAAIAAAAIgEAFQgBAEAAABIABABIgBAAIgBACIAAADIAAADIgCADIgCAFIgBAGIACAAIABABIAAADIAAACIAAACIgBACIgBACQAAAAABABQAAABAAAAQAAABABAAQAAAAABABIABAAQAAAAAAAAQAAAAAAABQAAAAAAABQgBABAAABQgBAEADABQAAAAAAABQAAAAABAAQAAAAAAAAQAAAAAAAAIAAACIgCgCIAAgBIgBABgAhGAQQAAAAABAAQAAAAAAABQAAAAAAAAQAAABgBAAIgBACIABACIABADIACgBIAAgFQAAgBAAAAQAAgBAAAAQAAgBgBAAQAAAAgBAAIgBAAgAhIAHIABAFIABgBIgBgEgAg2gxIABAAIAAgEIgBAAQAAAAgBAAQAAABAAAAQAAABAAAAQABABAAABg");
	this.shape_36.setTransform(35.3,26.7);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f("#373535").s().p("AhCCIQgEgKAAgRIACgKIACgKIgDgcQgCgYADglIADg/QgCggACgUQAEgmAYAJQALAEAFAQIAGAaQAKAvAFAXIAPAlIAGAcQAEARAJAFQAEgkAAhHIACgvIgDgXQgDgQADgFQAEgIAKACQAJABAFAHQAEAGgBAQIgCAZIgBCtIAFAaQADASgEAHQgFAJgNABQgNABgHgHQgHgIgNgmIgYhMQgQgtgEghQAEAxgBAvQgBAWAGAqQABAUgCAFIgSAVQgFADgEAAQgIAAgFgLgAgyBgIACADIABgBIgBgCIgBgBIgBABgAgwBdIgCgDIACAAQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAQgBgBAAAAQAAAAAAgBQAAAAAAAAQABgBAAAAIgBgEIAAgEIACgFQAAgBAAgBQAAAAAAgBQAAAAAAgBQAAAAAAgBIgBgBIAAAAIAAgFIgBgDIABgDIABgGIABgEIAAgBIgBgCIgCAAIAAgBIAAgDQAAAAAAgBQgBAAAAgBQAAAAAAAAQAAAAABAAIAAgBIAAgBQABAAAAgBQABgBAAAAQAAgBABAAQAAAAAAgBQAAgBAAAAQgBgBAAAAQAAgBAAAAQAAgBgBAAIgBAAQAAAAAAAAQAAgBAAAAQAAgBABAAQAAgBABgBIABgDQAAAAAAgBQgBAAAAAAQAAAAAAgBQgBAAAAAAIgCgBIABgDIABADQABABAAAAQAAAAABAAQAAAAAAAAQABAAAAgBIABgIQAAgGgBgBIgBgCIAAAAIADgIQAAgBAAAAQAAgBABAAQAAgBAAAAQgBAAAAAAIgFgBIABAAIABgCIAAgDIgBgCIgCAAIgBACIgBACIAAADQAAAAAAAAQAAABAAAAQAAAAABAAQAAABAAAAQgCABgBAEIgBAEQAAABAAAAQABAAAAAAQAAAAABAAQAAAAABABIAAAAIgBAIIABAIIABAAIgCABIABADIAAADQAAAAAAABQAAABAAAAQAAABAAAAQAAAAABAAIgBAAIAAAFIgEAFIACAEIAAABIgBACIgBAAIAAABIgBABIAAADIAAADQABAAAAAAQAAAAABAAQAAAAAAAAQABAAAAgBIABgCIABgCIABgCIAAAFIgCAHQgCADACACIAAADIAAgBIgCAAQAAABAAAAQAAAAAAABQAAAAABAAQAAAAABABIACADIgCABIAAABIACADQgBAAABAAIgBADIgBABIAAADIAAAFIgBACIACABIABAAIABADIABAAgAguAVIAAADQAAABAAAAQgBABABAAQAAABAAAAQAAABABAAIABAAQAAgBgBAAQAAAAAAAAQAAgBAAAAQABAAAAgBIABAAIABgBQAAAAAAgBQAAAAAAAAQAAAAAAgBQAAAAgBAAIAAgDIgCAAg");
	this.shape_37.setTransform(17.4,25.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_37},{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,265.4,135.3);


(lib.shape11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFFFFF","#FFFFFF","rgba(255,255,255,0.188)","rgba(255,255,255,0)"],[0,0.071,0.604,1],0,0,0,0,0,15.7).s().p("AhsBtQgtguAAg/QAAg+AtguQAugtA+AAQA/AAAuAtQAtAuAAA+QAAA/gtAuQguAtg/AAQg+AAgugtg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.5,-15.5,31,31);


(lib.sprite12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.shape11("synched",0);
	this.instance.setTransform(0,0,0.024,0.818,135);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({startPosition:0},1).to({alpha:0.602},2).wait(1));

	// Layer 4
	this.instance_1 = new lib.shape11("synched",0);
	this.instance_1.setTransform(0,0,0.024,0.818,45);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({startPosition:0},1).to({alpha:0.602},2).wait(1));

	// Layer 3
	this.instance_2 = new lib.shape11("synched",0);
	this.instance_2.setTransform(0,0,0.042,1.419,90);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({startPosition:0},1).to({alpha:0.602},2).wait(1));

	// Layer 2
	this.instance_3 = new lib.shape11("synched",0);
	this.instance_3.setTransform(0,0,0.042,1.419);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({startPosition:0},1).to({alpha:0.602},2).wait(1));

	// Layer 1
	this.instance_4 = new lib.shape11("synched",0);
	this.instance_4.setTransform(0,0,0.572,0.572);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({startPosition:0},1).to({alpha:0.602},2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-22,-22,44,44);


(lib._336x280_flasprite24_5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 43
	this.instance = new lib.sprite12();
	this.instance.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.62,scaleY:0.62,x:-1.2,y:-13.9},2).to({scaleX:0.74,scaleY:0.74,x:1.1,y:-19},1).to({scaleX:0.89,scaleY:0.89,x:5.6,y:-23.3},3).to({scaleX:0.42,scaleY:0.42,x:91,y:-0.4},54).to({scaleX:0.3,scaleY:0.3,x:109.3,y:19.5,alpha:0.07},14).wait(1).to({scaleX:0.3,scaleY:0.3,x:111,y:20.5,alpha:0},0).wait(5));

	// Layer 37
	this.instance_1 = new lib.sprite12();
	this.instance_1.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({scaleX:0.51,scaleY:0.51,x:10,y:1.8},2).to({scaleX:0.68,scaleY:0.68,x:18.1,y:4},2).to({scaleX:0.86,scaleY:0.86,x:26.2,y:6.8},3).to({scaleX:0.94,scaleY:0.94,x:30.3,y:8.2},4).to({scaleX:0.49,scaleY:0.49,x:102.9,y:3.9},37).to({scaleX:0.31,scaleY:0.31,x:109.6,y:-25.6,alpha:0.059},15).wait(1).to({scaleX:0.3,scaleY:0.3,x:108,y:-27,alpha:0},0).wait(16));

	// Layer 31
	this.instance_2 = new lib.sprite12();
	this.instance_2.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({scaleX:0.47,scaleY:0.47,x:2.8,y:-4.5},2).to({scaleX:0.59,scaleY:0.59,x:5.2,y:-6.9},2).to({scaleX:0.65,scaleY:0.65,x:6.5,y:-7.9},2).to({scaleX:0.8,scaleY:0.8,x:59.4,y:-14.9,alpha:0.699},35).to({scaleX:1.52,scaleY:1.52,x:98.9,y:-40,alpha:0.02},29).wait(1).to({scaleX:1.55,scaleY:1.55,x:100.5,alpha:0},0).wait(9));

	// Layer 25
	this.instance_3 = new lib.sprite12();
	this.instance_3.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({scaleX:1.41,scaleY:1.41,x:31.5,y:-24},45).to({x:44,y:-60.5,alpha:0},9).wait(26));

	// Layer 19
	this.instance_4 = new lib.sprite12();
	this.instance_4.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({scaleX:1.41,scaleY:1.41,x:42.5,y:-9},45).to({x:59,y:-0.5,alpha:0},9).wait(26));

	// Layer 13
	this.instance_5 = new lib.sprite12();
	this.instance_5.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({scaleX:0.57,scaleY:0.57,x:17.6,y:-0.1},2).to({scaleX:0.74,scaleY:0.74,x:27.7,y:1.8},2).to({scaleX:0.8,scaleY:0.8,x:30.9,y:2.9},2).to({x:61.5,y:15.1},16).to({scaleX:0.78,scaleY:0.78,x:63.2,y:14.9,alpha:0.969},1).to({scaleX:0.76,scaleY:0.76,x:66.7,y:14.5,alpha:0.922},2).to({scaleX:0.68,scaleY:0.68,x:75.3,y:3.2,alpha:0.711},8).to({scaleX:0.64,scaleY:0.64,x:82.2,y:1.2,alpha:0.602},4).to({scaleX:0.32,scaleY:0.32,x:103.7,y:12.1,alpha:0.039},15).wait(1).to({scaleX:0.3,scaleY:0.3,x:105,y:13,alpha:0},0).wait(27));

	// Layer 7
	this.instance_6 = new lib.sprite12();
	this.instance_6.setTransform(0,0,0.193,0.193);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({scaleX:0.36,scaleY:0.36,x:-3.7,y:-6.3},2).to({scaleX:0.49,scaleY:0.49,x:-6.5,y:-11},2).to({scaleX:0.6,scaleY:0.6,x:-9,y:-15.2},3).to({scaleX:0.63,scaleY:0.63,x:-9.5,y:-16},2).to({x:-17.5,y:5},16).to({x:-5,y:24},18).to({scaleX:0.42,scaleY:0.42,x:-24,y:45,alpha:0.699},12).to({scaleX:0.31,scaleY:0.31,x:-18.4,y:66.5,alpha:0.199},14).wait(1).to({scaleX:0.31,scaleY:0.31,x:-18,y:68,alpha:0.16},0).wait(10));

	// Layer 1
	this.instance_7 = new lib.sprite12();
	this.instance_7.setTransform(0,0,0.295,0.295);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({scaleX:0.49,scaleY:0.49,x:13.3,y:-14.4},2).to({scaleX:0.58,scaleY:0.58,x:20.7,y:-20.4},2).to({scaleX:0.59,scaleY:0.59,x:23,y:-21.2},2).to({x:24.4,y:-21},1).to({x:25.4,y:-20},1).to({x:25.3,y:20.9},29).to({scaleX:0.55,scaleY:0.55,x:34.2,y:45.7,alpha:0.828},19).to({scaleX:0.55,scaleY:0.55,x:32.8,y:47.1,alpha:0.801},1).to({scaleX:0.5,scaleY:0.5,x:22,y:51.3,alpha:0.602},6).to({scaleX:0.49,scaleY:0.49,x:21.9,y:53.3,alpha:0.57},1).to({scaleX:0.49,scaleY:0.49,x:22.6,y:55.1,alpha:0.539},1).to({scaleX:0.35,scaleY:0.35,x:35.4,y:70.3,alpha:0.051},11).wait(1).to({scaleX:0.34,scaleY:0.34,x:36.5,y:71.5,alpha:0},0).wait(3));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-6.5,-6.5,13,13);


(lib.sprite14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 89
	this.instance = new lib._336x280_flasprite24_5();
	this.instance.setTransform(-18.7,35.5,1.538,1.538,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 45
	this.instance_1 = new lib._336x280_flasprite24_5();
	this.instance_1.setTransform(11.2,1.5,1.538,1.538,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// Layer 1
	this.instance_2 = new lib._336x280_flasprite24_5();
	this.instance_2.setTransform(18.8,-35.4,1.538,1.538,0,0,180);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-28.7,-45.4,57.6,90.9);


// stage content:
(lib._300x600 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 6
	this.instance = new lib.sprite14();
	this.instance.setTransform(185.5,295.6,1.216,1.216);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(80).to({_off:false},0).to({_off:true},55).wait(15));

	// flash0.ai
	this.instance_1 = new lib.Symbol4();
	this.instance_1.setTransform(150,558.6,0.103,0.103,0,0,0,82.2,19.4);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(40).to({_off:false},0).to({regX:82.1,scaleX:1.11,scaleY:1.11,y:558.5},8).to({scaleX:1,scaleY:1},4).wait(5).to({scaleX:1.14,scaleY:1.14},5).to({scaleX:1,scaleY:1},5).to({scaleX:1.14,scaleY:1.14},5).to({scaleX:1,scaleY:1},5).wait(73));

	// flash0.ai
	this.instance_2 = new lib.Symbol5();
	this.instance_2.setTransform(320.3,491,1,1,0,0,0,140.7,30.5);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(25).to({_off:false},0).to({x:146.3,alpha:1},8).to({x:150.3},4).wait(113));

	// flash0.ai
	this.instance_3 = new lib.Symbol2();
	this.instance_3.setTransform(222.1,409.1,1,1,0,0,0,134.5,31.5);
	this.instance_3.alpha = 0;
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(21).to({_off:false},0).to({x:140.1,alpha:1},8).to({x:144.1},4).wait(117));

	// flash0.ai
	this.instance_4 = new lib.Symbol1();
	this.instance_4.setTransform(150,265,0.142,0.142,0,0,0,132.8,67.6);
	this.instance_4._off = true;
	this.instance_4.filters = [new cjs.ColorFilter(0.5, 0.5, 0.5, 1, 0, 0, 0, 0)];
	this.instance_4.cache(-2,-2,269,139);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(6).to({_off:false},0).to({regX:132.7,scaleX:1.13,scaleY:1.13,y:153},8).to({scaleX:1,scaleY:1},4).wait(132));

	// Layer 1
	this.instance_5 = new lib.nen();

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(150));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(150,300,300,600);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;