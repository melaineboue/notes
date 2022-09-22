<h3>Migration table d'association</h3>

##Yes
<pre>
Schema::create('produit_tag', function(Blueprint $table) {
  $table->unsignedInteger('tag_id');
  $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
  
  $table->unsignedInteger('produit_id');
  $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
  
  $table->primary(['tag_id', 'produit_id']);
  Schema::enableForeignKeyConstraints();
});

</pre>
