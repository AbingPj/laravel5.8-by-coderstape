<h1>Customers</h1>


<!-- <ul>
  <?php
        foreach ($customers as $customer) {
          echo '<li>' . $customer . '</li>';
        }
  ?>
</ul> -->

<ul>
  @foreach ($customers as $customer)
        <li>{{$customer}}</li>
  @endforeach
</ul>