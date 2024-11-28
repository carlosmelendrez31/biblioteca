<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         1.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Short description for class.
 */
class NumberTreesArticlesFixture extends TestFixture
{
    /**
     * records property
     *
     * @var array
     */
    public array $records = [
        ['number_tree_id' => 1, 'title' => 'First Article', 'body' => 'First Article Body', 'published' => 'Y'],
        ['number_tree_id' => 1, 'title' => 'Second Article', 'body' => 'Second Article Body', 'published' => 'Y'],
        ['number_tree_id' => 11, 'title' => 'Third Article', 'body' => 'Third Article Body', 'published' => 'Y'],
    ];
}
