<div class="content d-flex flex-column justify-content-between position-relative">
    <div class="title mb-3">
        <div
            class="d-flex position-relative align-content-center align-items-center align-self-center justify-content-start">
            <div class="mt-1">
                <img class="rounded shadow-1-strong" width="42" height="42"
                     src="<?php echo getAvatarByMail($this->author->mail); ?>"
                     alt="<?php $this->author->screenName(); ?>">
            </div>
            <div class="blogger ms-2">
                <div class="name">
                    <div class="my-1 d-flex flex-column align-self-center justify-content-start">
                        <span><?php $this->author->screenName(); ?></span>
                        <span style="font-size: 14px;color: rgba(0, 0, 0, 0.55)"><?php echo getHumanizedDate($this->created); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shuoshuo" class="shuoshuo heti" itemprop="abstract">
        <p><?php $this->content(); ?></p>
    </div>
</div>
