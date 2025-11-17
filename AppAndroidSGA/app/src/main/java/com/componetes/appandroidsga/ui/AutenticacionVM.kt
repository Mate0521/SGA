package com.componetes.appandroid.ui

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.componetes.appandroid.repository.AutenticacionRepository
import kotlinx.coroutines.launch

class AutenticacionVM : ViewModel()
{
    private val repository = AutenticacionRepository()

    private val _resultado = MutableLiveData<Result<Boolean>>()
    val resultado: LiveData<Result<Boolean>> get() = _resultado

    fun login(email: String, password: String) {
        viewModelScope.launch {
            val res = repository.login(email, password)
            _resultado.postValue(res)
        }
    }

    fun registrar(email: String, password: String) {
        viewModelScope.launch {
            val res = repository.registrar(email, password)
            _resultado.postValue(res)
        }
    }
}