<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="content">

    <div class="pad group">
        <article>
            <div class="entry">
            <?php $this->content(); ?>
            </div>
        </article>
        <div class="clear"></div>
        <p class="post-tags"><span><?php _e('标签: '); ?></span><?php $this->tags(', ', true, 'none'); ?></p>

        <?php $this->need('inc/share.php'); ?>

        <div class="clear"></div>

        <?php $this->related(3)->to($relatedPosts); ?>
        <?php if($relatedPosts->have()): ?>
            <h4 class="heading">
                <i class="fa fa-hand-o-right"></i>你可能还喜欢...
            </h4>
            <ul class="widget related-posts group thumbs-enabled" style="display: block;">
                <?php while ($relatedPosts->next()): ?>
                    <li>
                        <?php if($relatedPosts->fields->thumbUrl): ?>
                            <div class="tab-item-thumbnail">
                                <a title="<?php $relatedPosts->title(); ?>" href="<?php $relatedPosts->permalink(); ?>">
                                    <img width="200" height="200" sizes="(max-width: 200px) 100vw, 200px" alt="<?php $relatedPosts->title(); ?>" class="attachment-thumb-small size-thumb-small wp-post-image" src="<?php $relatedPosts->fields->thumbUrl(); ?>">																																		</a>
                            </div>
                        <?php endif; ?>

                        <div class="related-inner group post">
                            <h4 class="post-title"><a title="<?php $relatedPosts->title(); ?>" rel="bookmark" href="<?php $relatedPosts->permalink(); ?>"><?php $relatedPosts->title(); ?></a></h4>
                            <p class="tab-item-date"><?php $relatedPosts->date('j M, Y'); ?></p>					</div>

                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    <?php $this->need('comments.php'); ?>
    </div><!--/.pad-->
</section><!--/.content-->
<?php $this->need('footer.php'); ?>