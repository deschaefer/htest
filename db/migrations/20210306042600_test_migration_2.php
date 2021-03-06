<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TestMigration2 extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
        // inserting only one row
        $singleRow = [
            'id'    => 101,
            'user_id'  => 1,
            'logdate' => now(),
            'logtype' => 'User',
            'lognote' => 'from migration',
            '127.0.0.1'
        ];

        $table = $this->table('logs');
        $table->insert($singleRow);
        $table->saveData();

    }
}
