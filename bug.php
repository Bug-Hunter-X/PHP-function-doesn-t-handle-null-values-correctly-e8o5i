function foo(a, b) {
  if (a === null || b === null) {
    return null; //This will cause an error if a or b is not an integer
  }
  return a + b;
}