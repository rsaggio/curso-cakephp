<?php

use Phinx\Migration\AbstractMigration;

class CriaCategoriasTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {

        $table = $this->table('Categorias');
        $table->addColumn('nome','string',[
            'limit' => 50
        ]);
        $table->create();
    }

    public function down() {
        $this->dropTable('Categorias');
    }


}
