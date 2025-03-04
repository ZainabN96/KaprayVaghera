<div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; <?php echo date('Y')?> <a
							href="https://www.instagram.com/azsolutions.web" target="_blank"><strong>Zainab Naveed</strong></a> 
                  </div>
                  
               </div>
            </div>
         </footer>
      </div>
      <script src="../js/vendor/aos/aos.js" type="text/javascript"></script>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
      <script src="assets/tinymce/tinymce.min.js" type="text/javascript"></script>

         <script>
            function fetchNotifications() {
               debugger;
               $.ajax({
                     url: 'fetch_notifications.php', 
                     type: 'GET',
                     dataType: 'json',
                     success: function(response) {
                        //debugger;
                        $('#notification-count').text(response.count);
                        $('#notification-message').text(response.count);

                        // Update notification list
                        $('#notification-menu').empty();
                        if (response.notifications.length > 0) {
                           debugger;
                           $.each(response.notifications, function(index, notification) {
                              debugger;
                              if (notification.message && notification.message.includes("New order")) {
                                const orderNumberMatch = notification.message.match(/#(\d+)/);
                                const orderNumber = orderNumberMatch ? orderNumberMatch[1] : null;
                                    $('#notification-menu').append('<a class="dropdown-item media" href="order_master_detail.php?id=' + orderNumber + '">' +
                                    '<i class="fa ' + notification.icon + '"></i>' +
                                    '<p>' + notification.message + '</p>' +
                                    '</a>');
                                }
                           });
                        } else {
                           $('#notification-menu').append('<p>No notifications found.</p>');
                        }
                     },
                     error: function(xhr, status, error) {
                        console.error('Error fetching notifications:', error);
                     }
               });
            }

            // Initial fetch of notifications
            //fetchNotifications();

            // Refresh notifications every 2-3 seconds
            setInterval(fetchNotifications, 2000)
         </script>
   </body>
</html>