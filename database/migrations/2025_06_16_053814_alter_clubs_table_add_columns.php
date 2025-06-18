<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   public function up()
{
    Schema::table('club', function (Blueprint $table) {
        if (!Schema::hasColumn('club', 'club_name')) {
            $table->string('club_name')->nullable();
        }
        if (!Schema::hasColumn('club', 'logo_path')) {
            $table->string('logo_path')->nullable();
        }
        if (!Schema::hasColumn('club', 'introduction')) {
            $table->text('introduction')->nullable();
        }
        if (!Schema::hasColumn('club', 'staff_coordinator')) {
            $table->string('staff_coordinator')->nullable();
        }
        if (!Schema::hasColumn('club', 'staff_email')) {
            $table->string('staff_email')->nullable();
        }
        if (!Schema::hasColumn('club', 'year_start')) {
            $table->string('year_start')->nullable();
        }
    });
}
    public function down()
    {
        Schema::table('club', function (Blueprint $table) {
            $table->dropColumn([
                'cname',
                'logo',
                'intro',
                'mission',
                'faculty',
                'facultyno',
                'teamno',
                'eventno',
                'participants',
                'year'
            ]);
        });
    }
};


