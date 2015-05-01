<?hh

function foo(): string{
  return "foo";
}

function bar() {
  return 1 + foo();
}
