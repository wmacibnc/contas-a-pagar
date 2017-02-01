<footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-collapse collapse" id="footer-body">
                <ul class="nav navbar-nav">
                    <li><a href="#">Browse Our Library</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Our Partners</a></li>
                    <li><a href="#">User Review</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="footer-bar-btns visible-xs">
                    <li><a href="#" class="btn" title="History"><i class="fa fa-2x fa-clock-o blue-text"></i></a></li>
                    <li><a href="#" class="btn" title="Favourites"><i class="fa fa-2x fa-star yellow-text"></i></a></li>
                    <li><a href="#" class="btn" title="Subscriptions"><i class="fa fa-2x fa-rss-square orange-text"></i></a></li>
                </ul>
            </div>

        </div>
    </div>

</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- DataTable -->
<script src="css/dataTables.bootstrap.min.css"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
// Função datatable
$(document).ready(function() {
    $('#example').DataTable( {
        
      "dom": '<"toolbar">frtip',
      "bPaginate": true,
      "bFilter": false,
      "bInfo": true, 
      "oLanguage": {
        "sProcessing":   "Processando...",
        "sLengthMenu":   "Mostrar _MENU_ registros",
        "sZeroRecords":  "Não foram encontrados resultados",
        "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
        "sInfoFiltered": "",
        "sInfoPostFix":  "",
        "sSearch":       "Buscar:",
        "sUrl":          "",
        "oPaginate": {
            "sFirst":    "Primeiro",
            "sPrevious": "Anterior",
            "sNext":     "Seguinte",
            "sLast":     "Último"
        }
    },
    "pageLength": 5
    } );
} );

// Função da exclusão - Modal
$(document).ready(function () {
  /**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
 $('#delete-modal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  var modal = $(this);
  modal.find('#confirm').attr('href', 'excluir.php?id=' + id);
})

});
</script>

</body>

</html>
