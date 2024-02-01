<!DOCTYPE HTML>
<html>

<head>
    <!-- <link rel = "stylesheet" href = "form.css"> -->
    <style>
        p {
            font-size: 30px;
            text-align: center;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
        label{
            font-size: 20px;
            margin-bottom: 30px;
        }
        input[type='text'],input[type='select']{
            width: 300px;
            border-radius: 15px;
            padding: 4px 10px;
        }
        input[type='date'] {
            padding-right: 10px;
            font-size: 16px;
            border-radius: 20px;
            width: 60%;
            text-align: center;
        }
        input[type='submit'] {
            margin-left: 260px;
            font-size: 20px;
            border-radius: 20px;
            width: 16%;
            margin-bottom: 10px;
        }
        select{
            font-size: 16px;
            border-radius: 20px;
            width: 60%;
            text-align: center;
        }
        body{
            background-color: rgb(136, 183, 221);
            color: aliceblue;
        }
        div{
            background-color: rgb(49, 46, 58);
            align-items: center;
            border-radius: 14px;
            width: 40%;
            padding: 1px 0px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body><div>
    <p>Product Form</p>
    <table>
        <form action="formsubmit.php" method="get">
            <tr>
                <td><label for="prodname">Product name : </lable></td>
                <td><input type="text" id="prodname" name="group1[product_name]"><br><br></td>
            </tr>

            <tr>
                <td><label for="sku">SKU : </lable></td>
                <td><input type="text" id="sku" name="group1[sku]"><br><br></td>
            </tr>
            
            <tr>
                <td><label for="producttype">Product Type : </lable></td>
                <td><input type="radio" id="radiobtn1" name="group1[product_type]" value="Simple">
                    <label for="radiobtn1">Simple</label>
                    <input type="radio" id="radiobtn2" name="group1[product_type]" value="Bundle">
                    <label for="radiobtn2">Bundle</label><br><br></td>
            </tr>
            <tr>
                <td><label for="category">Category : </label></td>
                <td><select name="group1[category]" id="category">
                        <option value="Bar & Game Room">Bar & Game Room</option>
                        <option value="Bedroom">Bedroom</option>
                        <option value="Decor">Decor</option>
                        <option value="Dining & Kitchen">Dining & Kitchen</option>
                        <option value="Lighting">Lighting</option>
                        <option value=" Living Room"> Living Room</option>
                        <option value="Mattresses">Mattresses</option>
                        <option value="Office">Office</option>
                        <option value="Outdoor">Outdoor</option>
                    </select> <br><br></td>
            </tr>

            <tr>
                <td><label for="manufacturercost">Manufacturer Cost : </label></td>
                <td><input type="text" id="manufacturercost" name="group1[manufacturer_cost]"><br><br></td>
            </tr>

            <tr>
                <td><label for="shippingcost">Shipping Cost : </label></td>
                <td><input type="text" id="shippingcost" name="group1[shipping_cost]"><br><br></td>
            </tr>

            <tr>
                <td><label for="totalcost">Total Cost : </label></td>
                <td><input type="text" id="totalcost" name="group1[total_cost]"><br><br></td>
            </tr>

            <tr>
                <td><label for="price">Price : </label></td>
                <td><input type="text" id="price" name="group1[price]"><br><br></td>
            </tr>

            <tr>
                <td><label for="status">Status : </label></td>
                <td><select name="group1[status]" id="status">
                        <option value="Enabled">Enabled</option>
                        <option value="Disabled">Disabled</option>
                    </select><br><br></td>
            </tr>

            <tr>
                <td><label for="createddate">Created At : </label></td>
                <td><input type="date" id="createddate" name="group1[created_at]"><br><br></td>
            </tr>

            <tr>
                <td><label for="updateddate">Updated At : </label></td>
                <td><input type="date" id="updateddate" name="group1[updated_at]"><br><br></td>
            </tr>

    </table>
    <input type="submit">
    </form>
</div>
</body>

</html>