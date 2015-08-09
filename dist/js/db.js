(function() {
  var connection, mysql;

  mysql = require("mysql");

  connection = mysql.createConnection({
    host: "puton.us",
    user: "pathto12_secure",
    password: "eKcGZr59zAa2BEWU"
  });

  connection.connect();

  connection.query("SELECT 1 + 1 AS solution", function(err, rows, fields) {
    if (err) {
      throw err;
    }
    return console.log("The solution is: ", rows[0].solution);
  });

  connection.end();

}).call(this);
