package main

import (
	"fmt"
	"regexp"
	"strings"
)

func main() {
	findFirstStringInBracket("o(nly) get data in bracket")
}

func findFirstStringInBracket(str string) string {
	matched, _ := regexp.Compile(`\((.*?)\)`)
	result := matched.FindAllString(str, 1)

	if len(str) > 3 || cap(result) == 0 {
		replacer := strings.NewReplacer("(", "", ")", "")
		output := replacer.Replace(result[0])
		fmt.Println(output)
	}

	return ""
}
