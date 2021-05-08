<section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul itemscope="" class="navleft" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="" title="Thông Tin Doanh Nghiệp">
                                <span itemprop="name">Tin Tức </span>
                            </a>
                            <meta itemprop="position" content="2"> </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="" title="Liên Hệ">
                                <span itemprop="name"><?=$datadm[$_GET['id']]?></span>
                            </a>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                    <hr>
                    <h2 class="mb-4 color-main text-center text-uppercase"><?=$datadm[$_GET['id']]?></h2>

                </div>
            </div>
            <?php
            foreach (  $ProductList as $row) {
                $link = ROOT_URL."/bai-viet/".$row['slug'];
                echo '<div class="row mb-3">
                        <div class="col-lg-3">
                            <a href="'.$link.'">
                                <img width="100%" src="'.PATH_IMG.$row['urlHinh'].'" alt="">
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <h5>
                                <a href="'.$link.'">'.$row['tieude'].'</a></h5>
                            <p>
                            '.$row['MoTa'].'
                            </p>
                        </div>
                    </div>';
            }
            
            ?>
          
           

            <div>
            
              <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?=$Pagination?>
                </ul>
                </nav>
            </div>


        </div>

    </section>
