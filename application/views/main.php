<script>
$(document).ready(function() {
  $('#example').tabs();
});
</script>

<div id="example">
     <ul>
         <li><a href="#welcome"><span>Welcome</span></a></li>
         <li><a href="#app1"><span>Content 2</span></a></li>
         <li><a href="#app2"><span>Content 3</span></a></li>
     </ul>
    <div id="welcome"><?php $this->load->view("welcome"); ?></div>
    <div id="app1"><?php $this->load->view("welcome"); ?></div>
    <div id="app2"><?php $this->load->view("welcome"); ?></div>
</div>