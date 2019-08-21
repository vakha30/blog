<?php $this->layout('admin/layout') ?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Админ-панель</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="">
            <div class="box-header">
              <h2 class="box-title">Все категории</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="/admin/category/create" class="btn btn-success btn-lg">Добавить</a> <br> <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Действия</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach($categorys as $category): ?>
                    <tr>
                        <td><?= $category['id']; ?></td>
                        <td><?= $category['title']; ?></td>
                        <td>
                            <a href="#" class="btn btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="/admin/category/<?= $category['id'] ?>/edit" class="btn btn-warning">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/admin/category/<?= $category['id'] ?>/delete" class="btn btn-danger" onclick="return confirm('Вы уверены?');">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Действия</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
По вопросам к главному администратору.
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
