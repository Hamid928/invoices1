<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_num');//رقم الفانورة
            $table->date('invoice_date');//تاريخ الفانورة
            $table->date('due_date');//تاريخ الاستحقاق
            $table->string('product');//اسم المنتج
            $table->string('section');// القسم 
            $table->string('discount');//الخصم
            $table->string('rate_vate'); // الضريبة
            $table->decimal('value_rate'); // قيمة الضريبة
            $table->decimal('total'); // الاجمالي
            $table->string('status'); // حالة الفاتورة
            $table->integer('value_status');// قيمة  حالة الفاتورة
            $table->text('note')->nullable();// ملاحظات
            $table->string('user');//
            $table->softDeletes();//
            $table->timestamps();///
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
