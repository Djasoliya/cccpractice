ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04aa6d;
}
.form {
  background-color: #f4f4f4;
  border-radius: 5px;
  margin: 20px;
  padding: 20px;
}

.row {
  margin-bottom: 10px;
}

label {
  display: inline-block;
  width: 120px;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea {
  width: 250px;
  padding: 5px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
#logo {
  width: 50px;
  height: 50px;
}
/* .floatleft {
  float: left;
} */
