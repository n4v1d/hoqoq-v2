<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('branch_id'); // User Group
            $table->integer('group_id');  // User Group
            $table->string('card')->nullable();
            $table->string('account')->nullable();
            $table->string('shaba')->nullable();
            $table->integer('bank_id');  // Bank
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('status')->default(1); // [1 => "active" , 2 => "inactive"]

            $table->integer('bon')->default(1); // [1 => "has" , 2 => "hasn't"]
            $table->integer('bime')->default(1); // [1 => "has" , 2 => "hasn't"]
            $table->integer('tax')->default(1); // [1 => "has" , 2 => "hasn't"]
            $table->integer('fogholade')->default(0); // [1 => "has" , 2 => "hasn't"]
            $table->integer('farzand')->default(1); // [1 => "has" , 2 => "hasn't"]
            $table->integer('farzand_count')->default(0); // [1 => "has" , 2 => "hasn't"]
            $table->integer('maskan')->default(1); // [1 => "has" , 2 => "hasn't"]
                // New Field
            $table->integer('sso')->nullable(); // [tamin ejtemaii Number]
            $table->integer('sso_type')->nullable(); // [tamin ejtemaii Type]
            $table->string('father')->nullable(); // [Father Name]
            $table->string('bday')->nullable(); // [User BirthDay]
            $table->integer('sex')->default(0); // [User BirthDay]
            $table->string('from')->default(0); // [User BirthDay]
            $table->integer('education')->default(0); //  education Level
            $table->string('national_id')->default(0); // [national Code]

            $table->string('bimeTakmili')->default(0); // [national Code]
            $table->string('bimeTakmili_count')->default(0); // [national Code]

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personels');
    }
}
