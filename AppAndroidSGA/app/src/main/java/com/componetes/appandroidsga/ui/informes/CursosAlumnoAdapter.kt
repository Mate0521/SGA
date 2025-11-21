package com.componetes.appandroidsga.ui.informes

import android.view.LayoutInflater
import android.view.ViewGroup

import androidx.recyclerview.widget.DiffUtil
import androidx.recyclerview.widget.ListAdapter
import androidx.recyclerview.widget.RecyclerView
import com.componetes.appandroidsga.data.modelo.respuesta.informes.CursoAlumno
import com.componetes.appandroidsga.data.modelo.respuesta.informes.HorarioCurso
import com.componetes.appandroidsga.databinding.ItemCursoAlumnoBinding

class CursosAlumnoAdapter :
    ListAdapter<CursoAlumno, CursosAlumnoAdapter.CursoViewHolder>(DiffCallback()) {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): CursoViewHolder {
        val binding = ItemCursoAlumnoBinding.inflate(
            LayoutInflater.from(parent.context), parent, false
        )
        return CursoViewHolder(binding)
    }

    override fun onBindViewHolder(holder: CursoViewHolder, position: Int) {
        holder.bind(getItem(position))
    }

    class CursoViewHolder(private val binding: ItemCursoAlumnoBinding) :
        RecyclerView.ViewHolder(binding.root) {

        fun bind(curso: CursoAlumno) {
            binding.txtAsignatura.text = curso.asignatura
            binding.txtProfesor.text = "Profesor: ${curso.profesor}"
            binding.txtHorario.text = formatearHorario(curso.horario)
        }

        private fun formatearHorario(h: HorarioCurso): String {
            val dias = listOf(
                "Lunes" to h.lunes,
                "Martes" to h.martes,
                "Miércoles" to h.miercoles,
                "Jueves" to h.jueves,
                "Viernes" to h.viernes,
                "Sábado" to h.sabados,
                "Domingo" to h.domingo
            )

            val texto = dias
                .filter { it.second != null }
                .joinToString("\n") { "${it.first}: ${it.second}" }

            return if (texto.isEmpty()) "Sin horario" else texto
        }
    }

    class DiffCallback : DiffUtil.ItemCallback<CursoAlumno>() {
        override fun areItemsTheSame(oldItem: CursoAlumno, newItem: CursoAlumno) =
            oldItem.id_curso == newItem.id_curso

        override fun areContentsTheSame(oldItem: CursoAlumno, newItem: CursoAlumno) =
            oldItem == newItem
    }
}
