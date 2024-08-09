<?php
<<<<<<< HEAD

=======
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class AddCustomerIdToProfilesTable extends Migration
=======
class CreateProfilesTable extends Migration
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::table('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable();

            // If you want to enforce a foreign key relationship:
            // $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
=======
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('customer_id');
        });
=======
        Schema::dropIfExists('profiles');
>>>>>>> 6c6e3d365ad8c86361073d2302430daeac28e5bc
    }
}
