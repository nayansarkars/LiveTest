<?php
$student = array(
  'name' => 'Alice',
  'age' => 22,
  'grade' => 'A'
);

echo $student['age'];

if (array_key_exists('grade', $student)) {
  echo "The 'grade' key exists in the array.";
} else {
  echo "The 'grade' key does not exist in the array.";
}