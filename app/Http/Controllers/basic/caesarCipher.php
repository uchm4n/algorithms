<?php
/*
 *
 * Problem Statement
 * Julius Caesar protected his confidential information from his enemies by encrypting it.
 * Caesar rotated every letter in the string by a fixed number K.
 * This made the string unreadable by the enemy. You are given a string S and the number K.
 * Encrypt the string and print the encrypted string.
 *
 * For example:
 * If the string is middle-Outz and K=2, the encoded string is okffng-Qwvb. Note that only the letters are encrypted while symbols like - are untouched.
 * 'm' becomes 'o' when letters are rotated twice,
 * 'i' becomes 'k',
 * '-' remains the same because only letters are encoded,
 * 'z' becomes 'b' when rotated twice.
 *
 * Input Format: Input consists of an integer N equal to the length of the string, followed by the string S and an integer K.
 *
 * Constraints:
 * 1≤N≤100
 * 0≤K≤100
 * S is a valid ASCII string and doesn't contain any spaces.
 *
 * Output Format: For each test case, print the encoded string.
 * Sample Input: 11
 *
 * middle-Outz
 * 2
 * Sample Output
 *
 * okffng-Qwvb
 * Explanation
 *
 * As explained in statement.
 *
 **/
function offsetK($k){
    if($k >= 26){
        return abs(offsetK($k - 26));
    }
    else{
        return $k;
    }
}
// input
//middle-Outz
//okffng-Qwvb

//input
//78
//1X7T4VrCs23k4vv08D6yQ3S19G4rVP188M9ahuxB6j1tMGZs1m10ey7eUj62WV2exLT4C83zl7Q80M
//27
//output
//1Y7U4WsDt23l4ww08E6zR3T19H4sWQ188N9bivyC6k1uNHAt1n10fz7fVk62XW2fyMU4D83am7R80N
function crypto($n,$string,$k){

    $low = range('a','z');
    $high = range('A','Z');
    $newLetters = [];


    for ($i = 0; $i < $n ; $i++) {
        $letter = $string[$i];

        switch(true){
            case(ctype_upper($letter)):
                $off = offsetK(array_search($letter,$high) + $k);
                $new = array_slice($high,$off,1)[0];
                break;
            case(ctype_lower($letter)):

                $off = offsetK(array_search($letter,$low) + $k);
                $new = array_slice($low,$off,1)[0];
                break;
            case(ctype_digit($letter)):
                $new = $letter;
                break;
            default:
                $new = $letter;

                break;
        }

        $newLetters[] = $new;

    }

    return (implode('',$newLetters));
}


$arr = ['100','DNFjxo?b5h*5<LWbgs6?V5{3M].1hG)pv1VWq4(!][DZ3G)riSJ.CmUj9]7Gzl?VyeJ2dIPEW4GYW*scT8(vhu9wCr]q!7eyaoy.','45'];
echo crypto($arr[0],$arr[1],$arr[2]);
echo PHP_EOL;
