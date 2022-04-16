// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(document).ready(function() {
  $('#dataScroll').DataTable({

  
        scrollY: 300,
        paging: false
  });
     
});
