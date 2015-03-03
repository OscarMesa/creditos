<article class="col-xs-12">    
    <div class="box box-primary">
        <div class="box-body">
            <div id="tabs">
                <ul id="yw0" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab1">Información cliente</a></li>
                    <li><a data-toggle="tab" href="#tab2">Referencias</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade active in">
                        <?php
                            echo $this->renderPartial('_infromacionCliente',array('model'=>$model));
                        ?>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <?php
                            echo $this->renderPartial('_refenciasCliente',array('model'=>$model));
                        ?>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</article>
<script type="text/javascript">
    $(function () {
        jQuery('#tabs').tab('show');
        jQuery('#tabs').on('shown', '');
    });
</script>