import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ApiService } from '../../services/api.service';
import { HttpClientModule } from '@angular/common/http';
@Component({
  selector: 'app-concurso',
  standalone: true,
  imports: [],
  templateUrl: './concurso.component.html',
  styleUrl: './concurso.component.css'
})
export class ConcursoComponent {
  preguntas : any[] = [];
  constructor(private apiService: ApiService){}
  ngOnInit(): void {
    this.apiService.getPreguntas().subscribe({
      
      next:(data)=>{
        console.log(data);
      },
      error:(error)=>{
        console.error('Error fetching preguntas:', error);
      }
    })
  }

}
