<?php


class visits_counter_widget {
    
    private $counter = null;
    private $settings = null;
    private $title;
    
    public function __construct() {
        $this->counter = new vs_counter();
        $this->settings = vs_settings::getInstance();
        $this->labels = $this->settings->get_display_labels();
        
        $this->count_values = $this->counter->vc_count_users();
        $this->displayOptions = $this->settings->get_display_options();
        
        $this->title = $this->labels['widgetTitle'];
        $this->onlineUsersLabel = $this->labels['nowOnlineLabel'];
        $this->overallUsersLabel = $this->labels['overallLabel'];
        $this->dailyUsersLabel = $this->labels['dailyLabel'];
        $this->weeklyUsersLabel = $this->labels['weeklyLabel'];
    }
    
    public function drawWidget($args){
        extract($args);
    ?>
        <?php echo $before_widget; ?>
            <?php echo $before_title
                . $this->title
                . $after_title; ?>
            <?php echo $this->_prepareContent(); ?>
        <?php echo $after_widget; ?>
    <?php
    }
    
    public function displayWidgetContent(){
        return $this->_prepareContent(True);
    }
    
    private function _prepareContent($displayTitle = False){
        if ($displayTitle == False)
            $content = "";
        else
            $content = "<h3>".$this->title."</h3>";

        if ($this->displayOptions['displayCurrent'])
            $content .= "<div class='online'>".$this->onlineUsersLabel.": <span class='num'>".$this->count_values['online_users']."</span></div>";
        if ($this->displayOptions['displayDaily'])
            $content .= "<div class='daily'>".$this->dailyUsersLabel.": <span class='num'>".$this->count_values['daily_counter']."</span></div>";
        if ($this->displayOptions['displayWeekly'])
            $content .= "<div class='weekly'>".$this->weeklyUsersLabel.": <span class='num'>".$this->count_values['weekly_counter']."</span></div>";
        if ($this->displayOptions['displayOverall'])
            $content .= "<div class='sum'>".$this->overallUsersLabel.": <span class='num'>".$this->count_values['overall_counter']."</span></div>";
        
        //cut last <br /> tag in $content:
        $content = substr($content, 0, -6);
        
        return $content;
    }
    
}
?>
