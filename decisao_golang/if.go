package main

import "fmt"

func main() {
	fmt.Println("Testando escopo de bloco no Go")
	idade := 18

	if idade >= 18 {
		mensagem := "Maior de idade"
		fmt.Println(mensagem)
	} else {
		mensagem := "Menor de idade"
		fmt.Println(mensagem)
	}

	mensagem := "teste"
	fmt.Println(mensagem)
}
