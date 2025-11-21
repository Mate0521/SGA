package com.componetes.appandroid.ui.profesores

import android.content.Intent
import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.DiffUtil
import androidx.recyclerview.widget.ListAdapter
import androidx.recyclerview.widget.RecyclerView
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroidsga.databinding.ItemProfesorBinding
import com.componetes.appandroidsga.ui.profesores.detalle.ProfesorDetalle

class ProfesoresAdapter(
    private val onClick: (Profesor) -> Unit
) : ListAdapter<Profesor, ProfesoresAdapter.ProfesorViewHolder>(DiffCallback()) {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ProfesorViewHolder {
        val binding = ItemProfesorBinding.inflate(
            LayoutInflater.from(parent.context),
            parent,
            false
        )
        return ProfesorViewHolder(binding)
    }

    override fun onBindViewHolder(holder: ProfesorViewHolder, position: Int) {
        holder.bind(getItem(position))
    }

    inner class ProfesorViewHolder(private val binding: ItemProfesorBinding)
        : RecyclerView.ViewHolder(binding.root) {

        fun bind(profesor: Profesor) {
            binding.txtNombre.text = profesor.nombre
            binding.txtArea.text = profesor.area
            binding.txtDepartamento.text = profesor.departamento

            binding.root.setOnClickListener { onClick(profesor) }
        }
    }

    class DiffCallback : DiffUtil.ItemCallback<Profesor>() {
        override fun areItemsTheSame(oldItem: Profesor, newItem: Profesor) =
            oldItem.id == newItem.id

        override fun areContentsTheSame(oldItem: Profesor, newItem: Profesor) =
            oldItem == newItem
    }
}