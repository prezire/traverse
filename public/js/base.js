function Traverse()
{
  this.baseUrl;
  this.init = function()
  {
    $('#visitor.index .dataTable').DataTable();
    $('.datetimepicker').datetimepicker({separator: '-'});
    this.setListeners();
  };
  this.setListeners = function()
  {
    var o = this;
    $('.delete').click(function(e){
      var b = confirm("Delete item. Are you sure?");
      if(b)
      {
        var t = $(this);
        var url = t.attr('href');
        $.get({url: url, success: function(response){
          var r = response;
          if(r)
          {
            //
          }
          else
          {
            //Do nothing.
          }
        }});
      }
      else
      {
        //
      }
      e.preventDefault();
    });
    $('#visitor.index .btnShowVisitor').click(function(e){
      $('#visitor.index .panel.addVisitor').slideToggle();
      e.preventDefault();
    });
    $('#visitor.index .btnShowRecords').click(function(e){
      var data = $('#visitor.index .showRecords form').serialize();
      $.post
      (
        'visitor/readByFilter',
        data,
        function(response)
        {
          var r = response;
          if(r.success)
          {
            var dt = $('#visitor.index .dataTable').DataTable();
            dt.clear().draw();
            for(var a = 0; a < r.visitors.length; a++)
            {
              var v = r.visitors[a];
              var row = 
              [
                v.full_name,
                v.purpose,
                v.person_to_visit,
                v.company,
                v.date_time_in,
                v.date_time_out
              ];
              dt.row.add(row).draw();
            }
             $('#visitor.index .showRecords input[type="text"]').val('');
          }
          else
          {
            //Error.
          }
        }
      );
      e.preventDefault();
    });
    $('#visitor.index .btnAddVisitor').click(function(e){
      var data = $('#visitor.index .panel.addVisitor form').serialize();
      $.post
      (
        'visitor/create',
        data,
        function(response)
        {
          var r = response;
          if(r.success)
          {
            location.reload();
            /*$('.alert-box.success').slideToggle().delay(5000).slideToggle();
            var dt = $('#visitor.index .dataTable').DataTable();
            var v = r.visitor;
            var row = 
            [
              v.full_name,
              v.purpose,
              v.person_to_visit,
              v.company,
              v.date_time_in,
              v.date_time_out
            ];
            dt.row.add( row).draw();
            $('#visitor.index input[type="text"]').val('');
            $('#visitor.index textarea').val('');*/
          }
          else
          {
            //Error.
          }
        }
      );
      e.preventDefault();
    });
  };
}