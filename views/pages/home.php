<div class="container my-5">
    <h1>Pet Shop</h1>

    <h2>Cibo</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Cat.</th>
          <th scope="col">Immagine</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach($foods as $item): ?>
        <tr>
          <td><?php echo $item->category->icon ?></td>
          <td><img class="w-25" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></td>
          <td><?php echo $item->name ?></td>
          <td>&euro; <?php echo $item->getFormatPrice() ?></td>
        </tr>
        <?php endforeach; ?>
        
      </tbody>
    </table>
      
    <h2>Giocattoli</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Cat.</th>
          <th scope="col">Immagine</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach($toys as $item): ?>
        <tr>
          <td><?php echo $item->category->icon ?></td>
          <td><img class="w-25" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></td>
          <td><?php echo $item->name ?></td>
          <td>&euro; <?php echo $item->getFormatPrice() ?></td>
        </tr>
        <?php endforeach; ?>
        
      </tbody>
    </table>
      
    <h2>Accessori</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Cat.</th>
          <th scope="col">Immagine</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>
      
      <?php foreach($accessories as $item): ?>
        <tr>
          <td><?php echo $item->category->icon ?></td>
          <td><img class="w-25" src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>"></td>
          <td><?php echo $item->name ?></td>
          <td>&euro; <?php echo $item->getFormatPrice() ?></td>
        </tr>
        <?php endforeach; ?>
        
      </tbody>
    </table>


  </div>
  
