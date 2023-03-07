import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Curso } from './curso';
import { CursoService } from './curso.service';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent implements OnInit{

  //Url base
  url = "http://localhost/api/php/";

  //Vetor de cursos(armazenamento)
  vetor!: Curso[];

  //Objeto da classe Curso
  curso = new Curso();

  constructor(private curso_servico: CursoService){}

  ngOnInit(){
    this.selecao();
  }

  //Cadastro
  cadastro(){
    alert("Cadastro");
  }

  //Seleçao
  selecao(){
    this.curso_servico.obterCursos().subscribe(
      (res: Curso[]) => {
        this.vetor = res;
      }
    )
  }

  //Alterar
  alterar(){
    alert("Alterar");
  }

  //Remover
  remover(){
    alert("Remover");
  }


}
