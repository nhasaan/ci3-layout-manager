<div class="row" id="form-wrapper" style="display: none;">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $this->lang->line('page_product_form_header'); ?></h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo form_open('album/save', array('id' => 'form-album')); ?>
                <input type="hidden" name="itemId" id="itemId" value="">
                <table id="" class="table table-responsive table-condensed table-bordered table-striped display">
                    <tbody>
                        <tr>
                            <th><?php echo $this->lang->line('th_title'); ?><span class="required">*</span></th>
                            <td> <input type="text" name="title" id="title" value="" class="form-control"></td>
                            <th>
                                <p class="error ">
                                    <span class="title"></span>
                                    <span class="title_min_char"></span>
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('th_brief'); ?></th>
                            <td> <textarea name="brief" id="brief" class="form-control"></textarea></td>
                            <th><p class="error"><span class="brief"></span></p></th>
                        </tr>
                        <tr>
                            <th><?php echo $this->lang->line('th_is_active'); ?></th>
                            <td> <input type="checkbox" name="is_active" id="is_active" value="1" checked="checked" class="form-control"></td>
                            <th><p class="error"><span class="is_active"></span></p></th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="btn_album" value="Album" class="btn btn-flat bg-green pull-right"> <?php echo $this->lang->line('btn_save'); ?> </button>                                
                            </td>
                            <td><a id="cancel" class="btn btn-flat pull-right"> <?php echo $this->lang->line('btn_cancel'); ?> </a></td>
                        </tr>
                    
                    </tbody>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>