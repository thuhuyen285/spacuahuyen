<section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <ul itemscope="" class="navleft" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="" title="Thông Tin Doanh Nghiệp">
                                <span itemprop="name"><?=$namedm?></span>
                            </a>
                            <meta itemprop="position" content="2"> </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemscope="" itemtype="http://schema.org/Thing" itemprop="item" href="" title="Liên Hệ">
                                <span itemprop="name"><?=$sp['tieude']?></span>
                            </a>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                    <hr>
                    <div class="text-center">
                        <h1 class="mb-4 color-main"><?=$sp['tieude']?></h1>
                        <div class="w-50 m-auto" style=" border-top: 1px dashed black;"></div>
                        <div class="content">
                            <?=$sp['noidung']?>
                        </div>
                    </div>
         
                </div>
            </div>
        </div>

    </section>