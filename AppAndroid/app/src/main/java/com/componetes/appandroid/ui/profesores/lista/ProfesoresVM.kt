package com.componetes.appandroid.ui.profesores.lista

import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.componetes.appandroid.data.modelo.respuesta.profesores.Profesor
import com.componetes.appandroid.repository.ProfesorRepository
import kotlinx.coroutines.launch

class ProfesoresVM : ViewModel() {

    private val repository = ProfesorRepository()

    val profesores = MutableLiveData<List<Profesor>>()
    val loading = MutableLiveData<Boolean>()
    val error = MutableLiveData<String>()

    fun cargarProfesores() {
        viewModelScope.launch {
            loading.value = true
            val response = repository.obtenerProfesores()
            if (response.isSuccessful) {
                profesores.value = response.body()
            } else {
                error.value = "Error ${response.code()}"
            }
            loading.value = false
        }
    }
}