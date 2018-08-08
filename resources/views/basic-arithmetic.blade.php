<h1> {{$text}} </h1>

@if($text == "add")
  Add: {{$num1}} <br>
  Addend : {{$num2}}<br>
  Sum : {{$num1 + $num2}}

@elseif($text == "sub")
    Minuend: {{$num1}} <br>
    Subtrahend : {{$num2}}<br>
    Difference : {{$num1 - $num2}}

@elseif($text == "mul")
    Multiplicand: {{$num1}} <br>
    Multiplier : {{$num2}}<br>
    Product : {{$num1 * $num2}}

@elseif($text == "div")
    Dividend: {{$num1}} <br>
    Divisor : {{$num2}}<br>
    Quotient : {{$num1 / $num2}}

@endif
