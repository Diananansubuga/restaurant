<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main canteen</title>
</head>
<style>
    .item-list{
        display: flex;
        flex-direction: column;

    }
    .label{
        margin-bottom: 10px;

    }
   .food .input[type="checkbox"]{
        margin-right:5px;
    }
    .sauce .input[type="radio"]{
        margin-right:5px;
    }
    button{
        color: black;
        background-color: aquamarine;
        border-radius: 50px;
        width:75px;
        align-items: center;
    }
</style>
<body>
    <form action="process_order.php" method="post">
    <div class="touch">
        <H2>TOUCH OF CLASS</H2>  
    </div>
    <div class="food">
       <H3>SELECT FOOD</H3>
       <p>*Price of food is determined by the sauce selected</p>
       <div class="item-list">
        <label for=""><input type="checkbox" name="item" value="item1">Matooke</label>
        <label for=""><input type="checkbox" name="item" value="item2">Pillawo</label>
        <label for=""><input type="checkbox" name="item" value="item3">White Rice</label>
        <label for=""><input type="checkbox" name="item" value="item4">Posho</label>
        <label for=""><input type="checkbox" name="item" value="item5">Katoggo</label>
       </div>
       <div class="sauce">
       <h3>SELECT SAUCE</h3>
          <div class="item-list">
            <label for=""><input type="radio" name="ite" value="item1">Ground Nuts -4000</label>
            <label for=""><input type="radio" name="ite" value="item2">Fish-7000</label>
            <label for=""><input type="radio" name="ite" value="item3">Beef-5000</label>
            <label for=""><input type="radio" name="ite" value="item4">Chicken-9000</label>
            <label for=""><input type="radio" name="ite" value="item5">Peas-5000</label>
            <label for=""><input type="radio" name="ite" value="item6">Beans-5000</label>
          </div>  
        </div>
    </div>
    <div class="drinks">
        <h3>SELECT DRINK</h3>
        <div class="item-list">
            <label for=""><input type="checkbox" name="it" value="item1">Soda-1000</label>
            <label for=""><input type="checkbox" name="it" value="item2">Water-1000</label>
            <label for=""><input type="checkbox" name="it" value="item3">Juice-1000</label>
        </div>
    </div><br>
    <div class="button1">
        <button>Takeaway</button>
        <button>Dinein</button>
    </div>
    <div class="message">
        <p id="selectedMessage"></p>
    </div>
    <button type="submit">Place Order</button>
    </form>
    <script src="selection.js"></script>
</body>
</html>