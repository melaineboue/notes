<h2 style="color:blue">Commandes artisan</h2>
<p>
  <strong>Model</strong>
</p>

<pre>
  php artisan make:model YourModelName
</pre>

<p>
  <strong>Controleur</strong>
</p>

<pre>
  php artisan make:controller YourControllerName
</pre>

<p>
  <strong>Migration</strong>
</p>

<pre>
  php artisan make:migration create_users_table --table=nomTable --create
</pre>
<pre>
  php artisan migrate:rollback
</pre>

<p>
  <strong>Model avec controleur et migration</strong>
</p>

<pre>
  php artisan make:model YourModelName -c -m
</pre>

<p>
  <strong>Model help</strong>
</p>

<pre>
  php artisan make:model --help
</pre>


<p>
  <strong>A voir</strong>
</p>
<pre>
  <a href="https://marketplace.visualstudio.com/items?itemName=absszero.vscode-laravel-goto">Liste à voir</a>
</pre>


<p>
  <h3>Gestion de fichiers</h3>
  <strong>Partager les fichiers</strong>
</p>
<pre>
  php artisan storage:link
</pre>

