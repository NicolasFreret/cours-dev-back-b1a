<?php
$posts = read('content');


ob_start();
foreach ($posts as $v) {
    echo '<div class="col">
					<article>
						<figure>
							<img src="'.$v['img'].'" alt="">
						</figure>
						<div class="content">
							<div class="text">
								<h1>'.$v['title'].'</h1>
								<p>Publié le 01/03/2023 • Production</p>
							</div>
							<a href="'.config()->home_url.'/blog'.$v['slug'].'" class="underline blue">Lire la suite</a>
						</div>
					</article>
				</div>';
}

$p = ob_get_clean(); 

$page = "blog";
require 'views/blog.php';