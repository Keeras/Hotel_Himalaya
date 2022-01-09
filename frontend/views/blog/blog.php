
<section>
    <div class="blog-body">
        <div class="container">
            <div class="row">
                <!-- Latest Posts -->
                <main class="posts-listing col-12">
                   <div class="row">
                            <!-- post -->
                            <?php foreach ($blog as $i): ?>
                                <div class="col-12 col-md-6 col-lg-4 blog-lup">
                                    <div class="post" data-id="<?= $i['id'] ?>">
                                        <div class="post-thumbnail"><a href="#"><img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/image-down-tv.jpg" alt="..." class="img-fluid"></a></div>
                                        <div class="post-details">
                                            <div class="post-meta d-flex justify-content-between">
                                                <div class="category"><a id="name"><?= $i['name'] ?></a></div>
                                            </div>
                                            <h3 class="h4" id="title"><?= $i['title'] ?></h3>
                                            <p class="text-muted" id="content"><?= $i['content'] ?></p>
                                            <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                                    <div class="avatar"><img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/svg/person-bounding-box.svg" alt="..." class="img-fluid"></div>
                                                    <div class="title text-dark"><span>Code Cater</span></div></a>
                                                <div class="date"><img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/svg/clock-fill.svg"/><span id="status"><?= $i['status'] ?></span></div>
                                            </footer>
                                        </div>
                                        <div class="row blog-modal-footer">
                                            <div class="col-6 edit ">
                                                <a  class="btn btn-rounded btn-outline-info waves-effect edit-button blog-edit" href = "javascript:void(0);" >Edit</a>
                                            </div>
                                            <div class="col-6 delete">
                                                <form method = "post" action = "<?=  Yii::$app->request->baseUrl; ?>/blog/delete/">
                                                    <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                                                    <button class="btn btn-rounded btn-outline-danger waves-effect blog-delete" type="submit" name="id" value="<?= $i['id'] ?>">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;  ?>
                        </div>
                </main>

                <form method = "post" action = "<?php echo Yii::$app->request->baseUrl; ?>/blog/update" class="search-form">
                    <input type = "hidden" name = "<?php echo Yii::$app->request->csrfParam; ?>" value = "<?php echo Yii::$app->request->csrfToken; ?>"/>
                    <?php $counter = 0; ?>
                    <div class="form-group">
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Blog</h5>
                                    </div>
                                    <div class="modal-body">
                                        <input type = "hidden" name="id">
                                        <!--<form>-->
                                        <div class="form-group my-form">
                                            <label for="<?php echo ++$counter; ?>" class="col-form-label">Name:</label>
                                            <input type="text" name="name" class="form-control required"  id="<?php echo $counter; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="<?php echo ++$counter; ?>" class="col-form-label">Title:</label>
                                            <input type="text" name="title" class="form-control" id="<?php echo $counter; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="<?php echo ++$counter; ?>" class="col-form-label">Content:</label>
                                           <textarea type="text" name="content" class="form-control" id="<?php echo $counter; ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="<?php echo ++$counter; ?>" class="col-form-label">Status:</label>
                                            <input type="text" name="status" class="form-control" id="<?php echo $counter; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-rounded btn-outline-warning waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" id="submit" class="btn btn-rounded btn-outline-info waves-effect edit-done">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
