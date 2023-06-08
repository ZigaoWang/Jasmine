<?php if (!defined("__TYPECHO_ROOT_DIR__")) {
  exit();
} ?>
<!DOCTYPE html>
<html lang="zh">
<?php $this->need("header.php"); ?>
<body class="bg-stone-100 dark:bg-[#0a0c19]" data-prismjs-copy="点击复制" data-prismjs-copy-error="按Ctrl+C复制" data-prismjs-copy-success="内容已复制！">
<div class="mx-auto md:max-w-[1200px]">
    <div class="lg:my-16 grid grid-cols-12 rounded bg-white m-1 md:m-2 lg:ml-0 lg:mr-0 dark:bg-[#161829]">
    <?php $this->need("component/sidebar-left.php"); ?>
        <div class="flex col-span-12 lg:col-span-8 flex-col lg:border-x-2 border-stone-100 dark:border-neutral-600 lg:pt-0 lg:px-6 pb-10 px-3">
            <?php $this->need("component/menu.php"); ?>
            <div class="flex flex-col gap-y-12">
                <div></div>
                <?php $this->need("component/post-title.php"); ?>
                <div class="markdown-body dark:!bg-[#161829] dark:!bg-[#0d1117] !text-neutral-900 dark:!text-gray-400" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
                <div class="flex flex-row gap-x-2 " id="post-tag">
                    <?php $this->tags(" ", true, ""); ?>
                </div>
                <div class="border-b-2 border-stone-100 dark:border-neutral-600"></div>
                <div>
                    <?php $this->need("comments.php"); ?>
                </div>
            </div>
        </div>
        <div class="hidden lg:col-span-3 lg:block" id="sidebar-right">
            <?php $this->need("component/sidebar.php"); ?>
        </div>
    </div>
    <?php $this->need("footer.php"); ?>
</div>
</body>
</html>
