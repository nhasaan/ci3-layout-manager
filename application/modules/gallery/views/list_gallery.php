<?php if( null != $this->session->flashdata('msg_update') 
    || null != $this->session->flashdata('msg_delete') 
    || null != $this->session->flashdata('msg_insert')) { ?>
<div class="alert alert-success alert-dismissable">
    <i class="fa fa-check"></i>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <b><?php if(null != $this->session->flashdata('msg_update')) { echo $this->session->flashdata('msg_update');} ?></b>
    <b><?php if(null != $this->session->flashdata('msg_delete')) { echo $this->session->flashdata('msg_delete');} ?></b>
    <b><?php if(null != $this->session->flashdata('msg_insert')) { echo $this->session->flashdata('msg_insert');} ?></b>
</div>
<?php } ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo $this->lang->line('page_album_list_header'); ?></h3>
                <a href="javascript:;" class="add add-album btn btn-flat bg-blue pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo $this->lang->line('btn_add_new'); ?></a>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo form_open(site_url('gallery/view'), array('id' => 'form-album-view')); ?>
                    <input type="hidden" name="itemId" value="">
                <?php echo form_close(); ?>
                <?php echo form_open(site_url('gallery/edit'), array('id' => 'form-album-edit')); ?>
                    <input type="hidden" name="itemId" value="">
                <?php echo form_close(); ?>
                <?php echo form_open(site_url('gallery/delete'), array('id' => 'form-album-delete')); ?>
                    <input type="hidden" name="itemId" value="">
                <?php echo form_close(); ?>
                <?php $this->load->view('gallery/form_gallery'); ?>
                <table id="album-list" data-responsive="responsive" class="table table-condensed table-responsive table-bordered table-striped display">
                    <thead>
                        <tr>
                            <th><?php echo $this->lang->line('th_id'); ?></th>
                            <th><?php echo $this->lang->line('th_title'); ?></th>
                            <th><?php echo $this->lang->line('th_brief'); ?></th>
                            <th><?php echo $this->lang->line('th_no_images'); ?></th>
                            <th><?php echo $this->lang->line('th_is_active'); ?></th>
                            <th><?php echo $this->lang->line('th_actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($album_list) ) {
                        foreach ($album_list as $item) { ?>
                            <tr>
                                <td> <?php echo $item->id; ?></td>
                                <td> <?php echo $item->title; ?></td>
                                <td> <?php echo $item->brief; ?></td>
                                <td> <?php echo isset($item->photos) ? count($item->photos) : 0; ?></td>
                                <td> <small class="badge <?php echo $item->is_active ? 'bg-green' : 'bg-red'; ?>"><?php echo $item->is_active ? $this->lang->line('page_active') : $this->lang->line('page_inactive'); ?></small></td>
                                <td>
                                    <a data-id="<?php echo $item->id; ?>" class="view-album" href="javascript:;"><i class="fa fa-eye"></i></a>&nbsp;
                                    <a data-id="<?php echo $item->id; ?>" class="edit-album" href="javascript:;"><i class="fa fa-edit"></i></a>&nbsp;
                                    <a data-id="<?php echo $item->id; ?>" class="delete-album" href="javascript:;"><i class="fa fa-trash-o"></i></a>&nbsp;
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>