function foo(a, b) {
  return (a === null || b === null) ? null : a + b;
}
//More robust handling
function foo(a,b){
  if(is_numeric($a) && is_numeric($b)){
    return $a + $b;
  } else {
    return null;
  }
} 