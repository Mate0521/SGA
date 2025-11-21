package com.componetes.appandroid.ui.asignaturas

import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.DiffUtil
import androidx.recyclerview.widget.ListAdapter
import androidx.recyclerview.widget.RecyclerView
import com.componetes.appandroid.data.modelo.respuesta.asignaturas.Asignatura
import com.componetes.appandroidsga.databinding.ItemAsignaturaBinding


class AsignaturasAdapter(
    private val onClick: (Asignatura) -> Unit
) : ListAdapter<Asignatura, AsignaturasAdapter.AsignaturaViewHolder>(DiffCallback()) {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): AsignaturaViewHolder {
        val binding = ItemAsignaturaBinding.inflate(
            LayoutInflater.from(parent.context),
            parent,
            false
        )
        return AsignaturaViewHolder(binding)
    }

    override fun onBindViewHolder(holder: AsignaturaViewHolder, position: Int) {
        holder.bind(getItem(position))
    }

    inner class AsignaturaViewHolder(private val binding: ItemAsignaturaBinding)
        : RecyclerView.ViewHolder(binding.root) {

        fun bind(asig: Asignatura) {
            binding.txtNombre.text = asig.nombre
            binding.txtCarrera.text = asig.nombre_car

            binding.root.setOnClickListener { onClick(asig) }
        }
    }

    class DiffCallback : DiffUtil.ItemCallback<Asignatura>() {
        override fun areItemsTheSame(old: Asignatura, new: Asignatura) = old.id == new.id
        override fun areContentsTheSame(old: Asignatura, new: Asignatura) = old == new
    }
}