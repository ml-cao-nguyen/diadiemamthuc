  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="view/template/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="view/template/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="view/template/admin/js/jquery.scrollTo.min.js"></script>
    <script src="view/template/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="view/template/admin/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="view/template/admin/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="view/template/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="view/template/admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="view/template/admin/js/sparkline-chart.js"></script>    
	<script src="view/template/admin/js/zabuto_calendar.js"></script>	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  </body>
</html>
<?php ob_end_flush();?>