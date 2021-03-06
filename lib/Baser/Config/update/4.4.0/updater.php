<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Config
 * @since			baserCMS v 4.4.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * 4.4.0 バージョン アップデートスクリプト
 */

/**
 * search_indices テーブル構造変更
 */
    if($this->loadSchema('4.4.0', '', 'search_indices', 'alter')) {
        $this->setUpdateLog('search_indices テーブルの構造変更に成功しました。');
    } else {
        $this->setUpdateLog('search_indices テーブルの構造変更に失敗しました。', true);
    }