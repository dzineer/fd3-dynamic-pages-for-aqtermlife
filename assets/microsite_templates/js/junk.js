if (e > 0) {
  /** @type {number} */
  var f = 1;
  for (;e >= f;) {
    var g = b["child_" + f + "_age"];
    var h = b["child_" + f + "_college"];
    /** @type {number} */
    var i = parseFloat(b.expense_college);
    if ("1" === h) {
      if(i += 18 > g)  {
      	parseFloat(c.college_cost_public) * Math.pow(1 + parseFloat(c.college_cost_increase) / 100, 18 - parseInt(g)) * 4
      } else {
      	parseFloat(c.college_cost_public) * (21 - parseInt(g) + 1)
      };
    } else {
      if ("2" === h) {
        i += 18 > g ? parseFloat(c.college_cost_private) * Math.pow(1 + parseFloat(c.college_cost_increase) / 100, 18 - parseInt(g)) * 4 : parseFloat(c.college_cost_private) * (21 - parseInt(g) + 1);
      }
    }
    /** @type {number} */
    b.expense_college = i;
    f++;
  }
}