<?php
/*
 * This file is part of the PommProject/ModelManager package.
 *
 * (c) 2014 - 2015 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\ModelManager\Test\Fixture;

use PommProject\Foundation\Session\Session;
use PommProject\ModelManager\Model\ModelTrait\WriteQueries;

class TruncateFixtureModel extends WriteFixtureModel
{
    use WriteQueries;

    public function __construct()
    {
        parent::__construct();
        $this->getStructure()->setRelation('truncate_fixture');
    }
}
