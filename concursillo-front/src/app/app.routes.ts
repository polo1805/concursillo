import { Routes } from '@angular/router';
import { ConcursoComponent } from './pages/concurso/concurso.component';

export const routes: Routes = [
    {path: '', redirectTo: 'concurso', pathMatch: 'full'},
    {path: 'concurso', component: ConcursoComponent}
];
