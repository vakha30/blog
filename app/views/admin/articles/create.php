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
                                <h2 class="box-title">Добавить статью</h2>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-6">
                                    <form action="/admin/articles/store" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название статьи</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст статьи</label>
                                            <textarea class="form-control" name="text"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Категория</label>
                                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                                <?php foreach($categorys as $category): ?>
                                                    <option value="<?= $category['id']; ?>"><?= $category['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Изображение</label>
                                            <input type="file" name="image">
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-success">Добавить</button>
                                        </div>
                                    </form>
                                </div>
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
